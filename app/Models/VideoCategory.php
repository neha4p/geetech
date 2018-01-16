<?php

class VideoCategory extends Eloquent
{
    protected $guarded = [];

    protected $table = 'video_categories';

    public static $rules = [];

    public function videos()
    {
        return $this->hasMany('Video');
    }

    public function hasChildren()
    {
        if (DB::table('video_categories')->where('parent_id', '=', $this->id)->count() >= 1) {
            return true;
        } else {
            return false;
        }
    }
}
