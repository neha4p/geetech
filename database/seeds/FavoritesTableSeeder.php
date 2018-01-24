<?php

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('favorites')->delete();
        
        \DB::table('favorites')->insert(array (
            
            array (
                'id' => 5,
                'user_id' => 1,
                'video_id' => 26,
                'created_at' => '2015-01-13 15:05:58',
                'updated_at' => '2015-01-13 15:05:58',
            ),
            
            array (
                'id' => 6,
                'user_id' => 1,
                'video_id' => 27,
                'created_at' => '2015-01-13 15:36:14',
                'updated_at' => '2015-01-13 15:36:14',
            ),
            
            array (
                'id' => 7,
                'user_id' => 1,
                'video_id' => 24,
                'created_at' => '2015-01-13 15:36:18',
                'updated_at' => '2015-01-13 15:36:18',
            ),
            
            array (
                'id' => 8,
                'user_id' => 1,
                'video_id' => 23,
                'created_at' => '2015-01-13 15:36:22',
                'updated_at' => '2015-01-13 15:36:22',
            ),
            
            array (
                'id' => 9,
                'user_id' => 1,
                'video_id' => 22,
                'created_at' => '2015-01-13 15:36:28',
                'updated_at' => '2015-01-13 15:36:28',
            ),
            
            array (
                'id' => 10,
                'user_id' => 1,
                'video_id' => 20,
                'created_at' => '2015-01-13 15:36:34',
                'updated_at' => '2015-01-13 15:36:34',
            ),
            
            array (
                'id' => 11,
                'user_id' => 1,
                'video_id' => 19,
                'created_at' => '2015-01-13 15:36:38',
                'updated_at' => '2015-01-13 15:36:38',
            ),
            
            array (
                'id' => 12,
                'user_id' => 1,
                'video_id' => 18,
                'created_at' => '2015-01-13 15:36:43',
                'updated_at' => '2015-01-13 15:36:43',
            ),
            
            array (
                'id' => 13,
                'user_id' => 1,
                'video_id' => 14,
                'created_at' => '2015-01-13 15:37:02',
                'updated_at' => '2015-01-13 15:37:02',
            ),
            
            array (
                'id' => 14,
                'user_id' => 1,
                'video_id' => 13,
                'created_at' => '2015-01-13 15:37:06',
                'updated_at' => '2015-01-13 15:37:06',
            ),
            
            array (
                'id' => 15,
                'user_id' => 2,
                'video_id' => 29,
                'created_at' => '2015-01-28 14:43:05',
                'updated_at' => '2015-01-28 14:43:05',
            ),
            
            array (
                'id' => 19,
                'user_id' => 1,
                'video_id' => 47,
                'created_at' => '2015-02-27 21:34:09',
                'updated_at' => '2015-02-27 21:34:09',
            ),
            
            array (
                'id' => 22,
                'user_id' => 2,
                'video_id' => 46,
                'created_at' => '2015-03-01 05:31:19',
                'updated_at' => '2015-03-01 05:31:19',
            ),
            
            array (
                'id' => 23,
                'user_id' => 2,
                'video_id' => 30,
                'created_at' => '2015-03-01 05:31:23',
                'updated_at' => '2015-03-01 05:31:23',
            ),
        ));
        
        
    }
}