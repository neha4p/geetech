<?php namespace App\Http\Controllers;

use Redirect;
use Setting;
use Auth;
use ThemeHelper;
use View;

class AdminThemesController extends Controller
{

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */

    public function index()
    {
        $data = [
            'admin_user' => Auth::user(),
            'themes' => ThemeHelper::get_themes(),
            'active_theme' => Setting::first()->theme
            ];

        return View::make('admin.themes.index', $data);
    }

    public function activate($slug)
    {
        $settings = Setting::first();
        $settings->theme = $slug;
        $settings->save();
        return Redirect::to('admin/themes')->with(['note' => 'Successfully Activated ' . ucfirst($slug) . ' Theme', 'note_type' => 'success']);
    }
}
