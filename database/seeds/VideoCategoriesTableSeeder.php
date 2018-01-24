<?php

use Illuminate\Database\Seeder;

class VideoCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('video_categories')->delete();
        
        \DB::table('video_categories')->insert(array (
            
            array (
                'id' => 11,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Animation',
                'slug' => 'animation',
                'created_at' => '2015-01-11 05:32:27',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 13,
                'parent_id' => NULL,
                'order' => 3,
                'name' => 'Sports',
                'slug' => 'sports',
                'created_at' => '2015-01-30 16:34:33',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 14,
                'parent_id' => 19,
                'order' => 10,
                'name' => 'Trailers',
                'slug' => 'trailers',
                'created_at' => '2015-01-30 16:34:50',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 15,
                'parent_id' => NULL,
                'order' => 4,
                'name' => 'Comedy',
                'slug' => 'comedy',
                'created_at' => '2015-02-04 14:16:23',
                'updated_at' => '2015-02-20 14:37:54',
            ),
            
            array (
                'id' => 17,
                'parent_id' => 23,
                'order' => 6,
                'name' => 'How-to & DIY',
                'slug' => 'how-to-diy',
                'created_at' => '2015-02-04 14:21:14',
                'updated_at' => '2015-02-05 13:52:31',
            ),
            
            array (
                'id' => 18,
                'parent_id' => NULL,
                'order' => 8,
                'name' => 'Tech',
                'slug' => 'tech',
                'created_at' => '2015-02-04 14:21:40',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 19,
                'parent_id' => NULL,
                'order' => 9,
                'name' => 'Movies',
                'slug' => 'movies',
                'created_at' => '2015-02-04 14:22:07',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 20,
                'parent_id' => NULL,
                'order' => 11,
                'name' => 'TV Shows',
                'slug' => 'tv-shows',
                'created_at' => '2015-02-04 14:22:15',
                'updated_at' => '2015-02-04 14:46:49',
            ),
            
            array (
                'id' => 21,
                'parent_id' => NULL,
                'order' => 2,
                'name' => 'Education',
                'slug' => 'education',
                'created_at' => '2015-02-04 14:23:03',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 22,
                'parent_id' => 23,
                'order' => 7,
                'name' => 'Cooking & Health',
                'slug' => 'cooking-and-health',
                'created_at' => '2015-02-04 14:23:42',
                'updated_at' => '2015-02-04 14:47:23',
            ),
            
            array (
                'id' => 23,
                'parent_id' => NULL,
                'order' => 5,
                'name' => 'Lifestyle',
                'slug' => 'lifestyle',
                'created_at' => '2015-02-04 14:25:37',
                'updated_at' => '2015-02-05 13:52:31',
            ),
        ));
        
        
    }
}