<?php

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('post_categories')->delete();
        
        \DB::table('post_categories')->insert(array (
            
            array (
                'id' => 6,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Example Category 1',
                'slug' => 'example-category-1',
                'created_at' => '2015-01-04 01:15:33',
                'updated_at' => '2015-02-05 14:08:36',
            ),
            
            array (
                'id' => 8,
                'parent_id' => 6,
                'order' => 2,
                'name' => 'Example Sub-category 1',
                'slug' => 'example-sub-category-1',
                'created_at' => '2015-01-04 01:16:42',
                'updated_at' => '2015-02-05 14:08:36',
            ),
        ));
        
        
    }
}