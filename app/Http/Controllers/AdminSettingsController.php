<?php namespace App\Http\Controllers;

use Redirect;
use Setting;
use Auth;
use Request;
use View;
use ImageHandler;
class AdminSettingsController extends BaseController
{

    public function index()
    {

        $data = [
            'admin_user' => Auth::user(),
            'settings' => Setting::first(),
            ];
        return View::make('admin.settings.index', $data);
    }

    public function save_settings()
    {

        $input = Request::all();
        $settings = Setting::first();

        $demo_mode = Request::get('demo_mode');
        $enable_https = Request::get('enable_https');
        $free_registration = Request::get('free_registration');
        $activation_email = Request::get('activation_email');
        $premium_upgrade = Request::get('premium_upgrade');

        if (empty($demo_mode)) {
            $input['demo_mode'] = 0;
        }

        if (empty($enable_https)) {
            $input['enable_https'] = 0;
        }

        if (empty($free_registration)) {
            $input['free_registration'] = 0;
        }

        if (empty($activation_email)) {
            $input['activation_email'] = 0;
        }

        if (empty($premium_upgrade)) {
            $input['premium_upgrade'] = 0;
        }

        if (Request::hasFile('logo')) {
            $input['logo'] = ImageHandler::uploadImage(Request::file('logo'), 'settings');
        } else {
            $input['logo'] = $settings->logo;
        }

        if (Request::hasFile('favicon')) {
            $input['favicon'] = ImageHandler::uploadImage(Request::file('favicon'), 'settings');
        } else {
            $input['favicon'] = $settings->favicon;
        }


        $settings->update($input);

        return Redirect::to('admin/settings')->with(['note' => 'Successfully Updated Site Settings!', 'note_type' => 'success']);
    }
}
