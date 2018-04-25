<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use \View as View;

class ApiController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('api.v1.documentation');
    }
}
