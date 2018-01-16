<?php

use \Redirect as Redirect;

class AdminPaymentSettingsController extends Controller
{

    public function index()
    {

        $data = [
            'admin_user' => Auth::user(),
            'settings' => Setting::first(),
            'payment_settings' => PaymentSetting::first(),
            ];
        return View::make('admin.paymentsettings.index', $data);
    }

    public function save_payment_settings()
    {

        $input = Request::all();

        $payment_settings = PaymentSetting::first();

        if (!isset($input['live_mode'])) {
            $input['live_mode'] = 0;
        }

        $payment_settings->update($input);

        return Redirect::to('admin/payment_settings')->with(['note' => 'Successfully Updated Payment Settings!', 'note_type' => 'success']);
    }
}
