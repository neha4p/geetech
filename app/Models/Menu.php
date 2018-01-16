<?php

class Menu extends Eloquent
{
    protected $guarded = [];

    protected $table = 'menu';

    public static $rules = [];

    public function hasChildren()
    {
        if (DB::table('menu')->where('parent_id', '=', $this->id)->count() >= 1) {
            return true;
        } else {
            return false;
        }
    }
}
