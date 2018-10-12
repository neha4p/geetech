<?php

class Video extends Eloquent
{
    protected $guarded = [];


    public static $rules = [];

    protected $fillable = ['user_id', 'video_category_id', 'title', 'type', 'access', 'details', 'description', 'active', 'featured', 'duration', 'image', 'embed_code', 'mp4_url', 'webm_url', 'ogg_url', 'drip_time', 'drip_interval', 'created_at'];

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}
