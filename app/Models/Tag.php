<?php

class Tag extends Eloquent
{
    protected $guarded = [];

    public static $rules = [];

    public function videos()
    {
        return $this->belongsToMany('Video');
    }
}
