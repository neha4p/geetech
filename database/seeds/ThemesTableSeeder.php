<?php

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('themes')->delete();
        
        \DB::table('themes')->insert(array (
            
            array (
                'id' => 1,
                'name' => 'Default Theme',
                'description' => 'This is the default theme that comes packaged with HelloVideo',
                'version' => '1.0',
                'slug' => 'default',
                'active' => 1,
                'created_at' => '2015-01-04 01:10:21',
                'updated_at' => '2015-01-04 01:10:21',
            ),
        ));
        
        
    }
}