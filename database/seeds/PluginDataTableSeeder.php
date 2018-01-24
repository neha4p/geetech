<?php

use Illuminate\Database\Seeder;

class PluginDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('plugin_data')->delete();
        
        \DB::table('plugin_data')->insert(array (
            
            array (
                'id' => 1,
                'plugin_slug' => 'hello',
                'key' => 'value1',
                'value' => 'asdfasdf',
                'created_at' => '2015-06-12 03:57:47',
                'updated_at' => '2015-06-12 04:02:47',
            ),
            
            array (
                'id' => 2,
                'plugin_slug' => 'hello',
                'key' => '_token',
                'value' => 'm2CP6Lp6rXfQZLxcFkTZSEwqnwMDDszJzYEvsEGd',
                'created_at' => '2015-06-12 03:57:47',
                'updated_at' => '2015-06-12 03:57:47',
            ),
            
            array (
                'id' => 3,
                'plugin_slug' => 'hello',
                'key' => 'value2',
                'value' => 'testval212312312f',
                'created_at' => '2015-06-12 22:01:02',
                'updated_at' => '2015-06-12 22:01:51',
            ),
        ));
        
        
    }
}