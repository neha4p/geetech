<?php

use Illuminate\Database\Seeder;

class PluginsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('plugins')->delete();
        
        \DB::table('plugins')->insert(array (
            
            array (
                'id' => 3,
                'name' => 'Hello',
                'description' => 'This is an example plugin for HelloVideo',
                'version' => '1.0',
                'slug' => 'hello',
                'active' => 1,
                'created_at' => '2015-06-12 03:50:47',
                'updated_at' => '2015-06-12 03:50:47',
            ),
        ));
        
        
    }
}