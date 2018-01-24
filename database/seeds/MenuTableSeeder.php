<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu')->delete();
        
        \DB::table('menu')->insert(array (
            
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Home',
                'url' => '/',
                'type' => 'none',
                'created_at' => '2015-01-06 03:52:06',
                'updated_at' => '2015-02-05 14:09:07',
            ),
            
            array (
                'id' => 4,
                'parent_id' => NULL,
                'order' => 6,
                'name' => 'Pages',
                'url' => '/pages',
                'type' => 'none',
                'created_at' => '2015-01-06 04:33:01',
                'updated_at' => '2015-05-31 16:57:16',
            ),
            
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 7,
                'name' => 'F.A.Q.s',
                'url' => '/page/faq',
                'type' => 'none',
                'created_at' => '2015-01-07 18:26:13',
                'updated_at' => '2015-05-31 16:57:16',
            ),
            
            array (
                'id' => 11,
                'parent_id' => NULL,
                'order' => 4,
                'name' => 'Videos',
                'url' => '',
                'type' => 'videos',
                'created_at' => '2015-01-11 02:14:53',
                'updated_at' => '2015-05-31 16:57:16',
            ),
            
            array (
                'id' => 12,
                'parent_id' => NULL,
                'order' => 5,
                'name' => 'Posts',
                'url' => '',
                'type' => 'posts',
                'created_at' => '2015-01-11 02:16:26',
                'updated_at' => '2015-05-31 16:57:16',
            ),
        ));
        
        
    }
}