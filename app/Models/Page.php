<?php

class Page extends Eloquent
{
    protected $guarded = [];


    public static $rules = [];

    protected $table = 'pages';

    protected $fillable = ['user_id', 'title', 'slug', 'image', 'body', 'active', 'created_at'];
}
