<?php namespace App\Http\Controllers;

use Redirect;
use Setting;
use Video;
use Menu;
use VideoCategory;
use PostCategory;
use ThemeHelper;
use Page;
use View;
use Auth;
use Session;


class ThemeHomeController extends Controller
{

    private $videos_per_page = 12;

    public function __construct()
    {
        //
        $settings = Setting::first();
        $this->videos_per_page = $settings->videos_per_page;
    }

    /*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	*/

    public function index()
    {

        if (\Request::get('theme')) {
            \Cookie::queue('theme', \Request::get('theme'), 100);
            return Redirect::to('/')->withCookie(cookie('theme', \Request::get('theme'), 100));
        }

        $data = [
            'videos' => Video::where('active', '=', '1')->orderBy('created_at', 'DESC')->simplePaginate($this->videos_per_page),
            'current_page' => 1,
            'menu' => Menu::orderBy('order', 'ASC')->get(),
            'pagination_url' => '/videos',
            'video_categories' => VideoCategory::all(),
            'post_categories' => PostCategory::all(),
            'theme_settings' => ThemeHelper::getThemeSettings(),
            'pages' => Page::where('active', '=', 1)->get(),
            ];

        //dd($data['videos']);

        return View::make('Theme::home', $data);
    }
}
