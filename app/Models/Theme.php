<?php

class Theme extends Eloquent
{
    protected $guarded = [];

    public static $rules = [];

    public $timestamps = false;

    protected $fillable = ['name', 'description', 'version', 'slug', 'active'];
}
