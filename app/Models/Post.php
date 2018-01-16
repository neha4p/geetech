<?php

class Post extends Eloquent
{
    protected $guarded = [];


    public static $rules = [];

    protected $table = 'posts';

    protected $fillable = ['post_category_id', 'user_id', 'title', 'slug', 'image', 'body', 'body_guest', 'access', 'active', 'created_at'];

    public function category()
    {
        return $this->belongsTo('PostCategory', 'post_category_id');
    }
}
