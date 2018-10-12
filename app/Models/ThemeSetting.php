<?php

class ThemeSetting extends Eloquent
{
    protected $guarded = [];

    public static $rules = [];

    protected $fillable = ['theme_slug', 'key', 'value'];
}
