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


class ThemeSearchController extends BaseController
{

    public function __construct()
    {

    }

    /*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	*/

    public function index()
    {
        $search_value = Request::get('value');

        if (empty($search_value)) {
            return Redirect::to('/');
        }
        $videos = Video::where('active', '=', 1)->where('title', 'LIKE', '%'.$search_value.'%')->orderBy('created_at', 'desc')->get();
        $posts = Post::where('active', '=', 1)->where('title', 'LIKE', '%'.$search_value.'%')->orderBy('created_at', 'desc')->get();

        $data = [
            'videos' => $videos,
            'posts' => $posts,
            'search_value' => $search_value,
            'menu' => Menu::orderBy('order', 'ASC')->get(),
            'video_categories' => VideoCategory::all(),
            'post_categories' => PostCategory::all(),
            'theme_settings' => ThemeHelper::getThemeSettings(),
            'pages' => Page::where('active', '=', 1)->get(),
            ];

        return View::make('Theme::search-list', $data);
    }
}
