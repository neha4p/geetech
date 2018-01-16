<?php

use \Redirect as Redirect;
use \HelloVideo\User as User;

class AdminUsersController extends Controller
{

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */

    public function index()
    {
        $search_value = Request::get('s');
        
        if (!empty($search_value)) :
            $users = User::where('username', 'LIKE', '%'.$search_value.'%')->orWhere('email', 'LIKE', '%'.$search_value.'%')->orderBy('created_at', 'desc')->get();
        else :
            $users = User::all();
        endif;

        $data = [
            'users' => $users
            ];
        return View::make('admin.users.index', $data);
    }

    public function create()
    {
        $data = [
            'post_route' => URL::to('admin/user/store'),
            'admin_user' => Auth::user(),
            'button_text' => 'Create User',
            ];
        return View::make('admin.users.create_edit', $data);
    }

    public function store()
    {
        $input = Request::all();

        if (Request::hasFile('avatar')) {
            $input['avatar'] = ImageHandler::uploadImage(Request::file('avatar'), 'avatars');
        } else {
            $input['avatar'] = 'default.jpg';
        }

        $input['password'] = Hash::make('password');

        $user = User::create($input);
        return Redirect::to('admin/users')->with(['note' => 'Successfully Created New User', 'note_type' => 'success']);
    }

    public function edit($id)
    {

        $user = User::find($id);
        $data = [
            'user' => $user,
            'post_route' => URL::to('admin/user/update'),
            'admin_user' => Auth::user(),
            'button_text' => 'Update User',
            ];
        return View::make('admin.users.create_edit', $data);
    }

    public function update()
    {
        $input = Request::all();
        $id = $input['id'];
        $user = User::find($id);

        if (Request::hasFile('avatar')) {
            $input['avatar'] = ImageHandler::uploadImage(Request::file('avatar'), 'avatars');
        } else {
            $input['avatar'] = $user->avatar;
        }

        if (empty($input['active'])) {
            $input['active'] = 0;
        }

        if ($input['password'] == '') {
            $input['password'] = $user->password;
        } else {
            $input['password'] = Hash::make($input['password']);
        }

        $user->update($input);
        return Redirect::to('admin/user/edit/' . $id)->with(['note' => 'Successfully Updated User Settings', 'note_type' => 'success']);
    }

    public function destroy($id)
    {

        User::destroy($id);
        return Redirect::to('admin/users')->with(['note' => 'Successfully Deleted User', 'note_type' => 'success']);
    }
}
