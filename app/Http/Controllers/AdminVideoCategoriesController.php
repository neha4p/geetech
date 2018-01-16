<?php namespace App\Http\Controllers;

use Redirect;
use Auth;
use View;
use Request;
use VideoCategory;

class AdminVideoCategoriesController extends Controller
{


    public function index()
    {
        $data = [
            'admin_user' => Auth::user(),
            'video_categories' => json_decode(VideoCategory::orderBy('order', 'ASC')->get()->toJson()),
            ];

        return View::make('admin.videos.categories.index', $data);
    }

    public function store()
    {
        $input = Request::all();
        $last_category = VideoCategory::orderBy('order', 'DESC')->first();

        if (isset($last_category->order)) {
            $new_category_order = intval($last_category->order) + 1;
        } else {
            $new_category_order = 1;
        }
        $input['order'] = $new_category_order;
        $video_category = VideoCategory::create($input);
        if (isset($video_category->id)) {
            return Redirect::to('admin/videos/categories')->with(['note' => 'Successfully Added Your New Video Category', 'note_type' => 'success']);
        }
    }

    public function update()
    {
        $input = Request::all();
        $category = VideoCategory::find($input['id'])->update($input);
        if (isset($category)) {
            return Redirect::to('admin/videos/categories')->with(['note' => 'Successfully Updated Category', 'note_type' => 'success']);
        }
    }

    public function destroy($id)
    {
        VideoCategory::destroy($id);
        $child_cats = VideoCategory::where('parent_id', '=', $id)->get();
        foreach ($child_cats as $cats) {
            $cats->parent_id = null;
            $cats->save();
        }
        return Redirect::to('admin/videos/categories')->with(['note' => 'Successfully Deleted Category', 'note_type' => 'success']);
    }

    public function edit($id)
    {
        return View::make('admin.videos.categories.edit', ['category' => VideoCategory::find($id)]);
    }

    public function order()
    {
        $category_order = json_decode(Request::get('order'));
        $video_categories = VideoCategory::all();
        $order = 1;
        
        foreach ($category_order as $category_level_1) :
            $level1 = VideoCategory::find($category_level_1->id);
            if ($level1->id) {
                $level1->order = $order;
                $level1->parent_id = null;
                $level1->save();
                $order += 1;
            }
            
            if (isset($category_level_1->children)) :
                $children_level_1 = $category_level_1->children;

                foreach ($children_level_1 as $category_level_2) :
                    $level2 = VideoCategory::find($category_level_2->id);
                    if ($level2->id) {
                        $level2->order = $order;
                        $level2->parent_id = $level1->id;
                        $level2->save();
                        $order += 1;
                    }

                    if (isset($category_level_2->children)) :
                        $children_level_2 = $category_level_2->children;


                        foreach ($children_level_2 as $category_level_3) :
                            $level3 = VideoCategory::find($category_level_3->id);
                            if ($level3->id) {
                                $level3->order = $order;
                                $level3->parent_id = $level2->id;
                                $level3->save();
                                $order += 1;
                            }
                        endforeach;
                    endif;
                endforeach;
            endif;
        endforeach;

        return 1;
    }
}
