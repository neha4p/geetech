<?php namespace App\Http\Controllers;

use \App\User as User;
use Redirect;
use Menu;
use VideoCategory;
use PostCategory;
use ThemeHelper;
use Page;
use View;
use Auth;
use Session;


class ThemePageController extends BaseController
{

    public function __construct()
    {

    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function index($slug)
    {
        $page = Page::where('slug', '=', $slug)->first();
            
        //Make sure page is active
        if ((!Auth::guest() && Auth::user()->role == 'admin') || $page->active) {
            $author = User::find($page->user_id);
            $data = [
                    'page' => $page,
                    'author' => $author,
                    'menu' => Menu::orderBy('order', 'ASC')->get(),
                    'video_categories' => VideoCategory::all(),
                    'post_categories' => PostCategory::all(),
                    'theme_settings' => ThemeHelper::getThemeSettings(),
                    'pages' => Page::where('active', '=', 1)->get(),
                ];
            return View::make('Theme::page', $data);
        } else {
            return Redirect::to('pages')->with(['note' => 'Sorry, this page is no longer active.', 'note_type' => 'error']);
        }
    }

    /*
     * Page That shows the latest video list
     *
     */
    public function pages()
    {
        $data = [
                'pages' => Page::orderBy('created_at', 'DESC')->get(),
                'page_title' => 'Pages',
                'page_description' => 'All Pages',
                'menu' => Menu::orderBy('order', 'ASC')->get(),
                'video_categories' => VideoCategory::all(),
                'post_categories' => PostCategory::all(),
                'theme_settings' => ThemeHelper::getThemeSettings(),
                'pages' => Page::where('active', '=', 1)->get(),
            ];

        return View::make('Theme::page-list', $data);
    }
}
