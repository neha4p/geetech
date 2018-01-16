<?php

class PostCategory extends Eloquent
{
    protected $guarded = [];

    protected $table = 'post_categories';

    public static $rules = [];

    public function posts()
    {
        return $this->hasMany('Post');
    }

    public function hasChildren()
    {
        if (DB::table('post_categories')->where('parent_id', '=', $this->id)->count() >= 1) {
            return true;
        } else {
            return false;
        }
    }
}
