<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            
            array (
                'id' => 3,
                'name' => 'gmail',
                'created_at' => '2014-10-04 16:31:57',
                'updated_at' => '2014-10-04 16:31:57',
            ),
            
            array (
                'id' => 4,
                'name' => 'techzilla',
                'created_at' => '2014-10-04 16:31:57',
                'updated_at' => '2014-10-04 16:31:57',
            ),
            
            array (
                'id' => 7,
                'name' => 'organized',
                'created_at' => '2014-10-08 15:45:48',
                'updated_at' => '2014-10-08 15:45:48',
            ),
            
            array (
                'id' => 8,
                'name' => 'chrome',
                'created_at' => '2014-10-08 15:49:01',
                'updated_at' => '2014-10-08 15:49:01',
            ),
            
            array (
                'id' => 10,
                'name' => 'revision3',
                'created_at' => '2014-10-09 02:01:56',
                'updated_at' => '2014-10-09 02:01:56',
            ),
            
            array (
                'id' => 11,
                'name' => 'tmnt',
                'created_at' => '2014-10-09 14:33:28',
                'updated_at' => '2014-10-09 14:33:28',
            ),
            
            array (
                'id' => 13,
                'name' => 'teenage mutant ninja turtles',
                'created_at' => '2014-10-09 14:39:58',
                'updated_at' => '2014-10-09 14:39:58',
            ),
            
            array (
                'id' => 21,
                'name' => 'top 5',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 22,
                'name' => 'glitch',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 23,
                'name' => 'mario',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 24,
                'name' => 'zelda',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 25,
                'name' => 'yoshi',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 26,
                'name' => 'link',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 27,
                'name' => 'nintendo',
                'created_at' => '2014-10-10 18:57:51',
                'updated_at' => '2014-10-10 18:57:51',
            ),
            
            array (
                'id' => 28,
                'name' => 'nes',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 29,
                'name' => 'gameboy',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 30,
                'name' => 'gaming',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 31,
                'name' => 'retro',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 32,
                'name' => 'classic',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 33,
                'name' => 'tech',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 34,
                'name' => 'review',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 35,
                'name' => 'video games',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 36,
                'name' => 'super nintendo',
                'created_at' => '2014-10-10 19:09:30',
                'updated_at' => '2014-10-10 19:09:30',
            ),
            
            array (
                'id' => 37,
                'name' => 'programming',
                'created_at' => '2014-10-10 19:26:43',
                'updated_at' => '2014-10-10 19:26:43',
            ),
            
            array (
                'id' => 38,
                'name' => 'education',
                'created_at' => '2014-10-10 19:26:43',
                'updated_at' => '2014-10-10 19:26:43',
            ),
            
            array (
                'id' => 39,
                'name' => 'mark zuckerberg',
                'created_at' => '2014-10-10 19:26:43',
                'updated_at' => '2014-10-10 19:26:43',
            ),
            
            array (
                'id' => 40,
                'name' => 'bill gates',
                'created_at' => '2014-10-10 19:26:43',
                'updated_at' => '2014-10-10 19:26:43',
            ),
            
            array (
                'id' => 41,
                'name' => 'code',
                'created_at' => '2014-10-10 19:26:43',
                'updated_at' => '2014-10-10 19:26:43',
            ),
            
            array (
                'id' => 42,
                'name' => 'jimmy fallon',
                'created_at' => '2014-10-10 20:15:05',
                'updated_at' => '2014-10-10 20:15:05',
            ),
            
            array (
                'id' => 43,
                'name' => 'latenight',
                'created_at' => '2014-10-10 20:15:05',
                'updated_at' => '2014-10-10 20:15:05',
            ),
            
            array (
                'id' => 44,
                'name' => 'late-night',
                'created_at' => '2014-10-10 20:15:05',
                'updated_at' => '2014-10-10 20:15:05',
            ),
            
            array (
                'id' => 45,
                'name' => 'carrot',
                'created_at' => '2014-10-10 20:25:33',
                'updated_at' => '2014-10-10 20:25:33',
            ),
            
            array (
                'id' => 46,
                'name' => 'introducing carrot',
                'created_at' => '2014-10-10 20:25:33',
                'updated_at' => '2014-10-10 20:25:33',
            ),
            
            array (
                'id' => 47,
                'name' => 'time-lapse',
                'created_at' => '2014-10-10 20:37:54',
                'updated_at' => '2014-10-10 20:37:54',
            ),
            
            array (
                'id' => 48,
                'name' => 'time lapse',
                'created_at' => '2014-10-10 20:37:54',
                'updated_at' => '2014-10-10 20:37:54',
            ),
            
            array (
                'id' => 49,
                'name' => 'lapse',
                'created_at' => '2014-10-10 20:37:54',
                'updated_at' => '2014-10-10 20:37:54',
            ),
            
            array (
                'id' => 50,
                'name' => 'norway',
                'created_at' => '2014-10-10 20:37:54',
                'updated_at' => '2014-10-10 20:37:54',
            ),
            
            array (
                'id' => 51,
                'name' => '',
                'created_at' => '2014-12-21 01:08:48',
                'updated_at' => '2014-12-21 01:08:48',
            ),
            
            array (
                'id' => 52,
                'name' => 'android',
                'created_at' => '2014-12-26 15:53:47',
                'updated_at' => '2014-12-26 15:53:47',
            ),
            
            array (
                'id' => 53,
                'name' => 'tablets',
                'created_at' => '2014-12-26 15:53:47',
                'updated_at' => '2014-12-26 15:53:47',
            ),
            
            array (
                'id' => 54,
                'name' => 'electronics',
                'created_at' => '2014-12-26 15:53:47',
                'updated_at' => '2014-12-26 15:53:47',
            ),
            
            array (
                'id' => 55,
                'name' => 'gadgets',
                'created_at' => '2014-12-26 15:53:47',
                'updated_at' => '2014-12-26 15:53:47',
            ),
            
            array (
                'id' => 56,
                'name' => 'android authority',
                'created_at' => '2014-12-26 15:53:47',
                'updated_at' => '2014-12-26 15:53:47',
            ),
            
            array (
                'id' => 57,
                'name' => 'foundation',
                'created_at' => '2014-12-27 03:06:32',
                'updated_at' => '2014-12-27 03:06:32',
            ),
            
            array (
                'id' => 58,
                'name' => 'kevin rose',
                'created_at' => '2014-12-27 03:06:32',
                'updated_at' => '2014-12-27 03:06:32',
            ),
            
            array (
                'id' => 59,
                'name' => 'tim ferris',
                'created_at' => '2014-12-27 03:06:32',
                'updated_at' => '2014-12-27 03:06:32',
            ),
            
            array (
                'id' => 60,
                'name' => 'author',
                'created_at' => '2014-12-27 03:06:32',
                'updated_at' => '2014-12-27 03:06:32',
            ),
            
            array (
                'id' => 61,
                'name' => 'treehouse show',
                'created_at' => '2014-12-27 15:20:31',
                'updated_at' => '2014-12-27 15:20:31',
            ),
            
            array (
                'id' => 62,
                'name' => 'team treehouse',
                'created_at' => '2014-12-27 15:20:31',
                'updated_at' => '2014-12-27 15:20:31',
            ),
            
            array (
                'id' => 63,
                'name' => 'gulpjs',
                'created_at' => '2014-12-27 15:20:31',
                'updated_at' => '2014-12-27 15:20:31',
            ),
            
            array (
                'id' => 64,
                'name' => 'gulp js',
                'created_at' => '2014-12-27 15:20:31',
                'updated_at' => '2014-12-27 15:20:31',
            ),
            
            array (
                'id' => 65,
                'name' => 'sketch 3',
                'created_at' => '2014-12-27 15:20:31',
                'updated_at' => '2014-12-27 15:20:31',
            ),
            
            array (
                'id' => 66,
                'name' => 'alma',
                'created_at' => '2014-12-27 15:42:34',
                'updated_at' => '2014-12-27 15:42:34',
            ),
            
            array (
                'id' => 67,
                'name' => 'short film',
                'created_at' => '2014-12-27 15:42:34',
                'updated_at' => '2014-12-27 15:42:34',
            ),
            
            array (
                'id' => 68,
                'name' => 'pixar animator',
                'created_at' => '2014-12-27 15:42:34',
                'updated_at' => '2014-12-27 15:42:34',
            ),
            
            array (
                'id' => 69,
                'name' => 'fantastic fest awards',
                'created_at' => '2014-12-27 15:42:34',
                'updated_at' => '2014-12-27 15:42:34',
            ),
            
            array (
                'id' => 70,
                'name' => 'ae tuts',
                'created_at' => '2014-12-27 18:55:31',
                'updated_at' => '2014-12-27 18:55:31',
            ),
            
            array (
                'id' => 71,
                'name' => 'short video',
                'created_at' => '2014-12-27 18:55:31',
                'updated_at' => '2014-12-27 18:55:31',
            ),
            
            array (
                'id' => 72,
                'name' => 'logo sting',
                'created_at' => '2014-12-27 18:55:31',
                'updated_at' => '2014-12-27 18:55:31',
            ),
            
            array (
                'id' => 73,
                'name' => 'logo reveal',
                'created_at' => '2014-12-27 18:55:31',
                'updated_at' => '2014-12-27 18:55:31',
            ),
            
            array (
                'id' => 74,
                'name' => 'coast',
                'created_at' => '2015-01-08 01:31:28',
                'updated_at' => '2015-01-08 01:31:28',
            ),
            
            array (
                'id' => 75,
                'name' => 'scenery',
                'created_at' => '2015-01-08 01:31:28',
                'updated_at' => '2015-01-08 01:31:28',
            ),
            
            array (
                'id' => 76,
                'name' => 'vimeo',
                'created_at' => '2015-01-08 01:31:28',
                'updated_at' => '2015-01-08 01:31:28',
            ),
            
            array (
                'id' => 77,
                'name' => 'hug it out',
                'created_at' => '2015-01-08 02:02:15',
                'updated_at' => '2015-01-08 02:02:15',
            ),
            
            array (
                'id' => 78,
                'name' => 'characters',
                'created_at' => '2015-01-08 02:02:15',
                'updated_at' => '2015-01-08 02:02:15',
            ),
            
            array (
                'id' => 79,
                'name' => 'animation',
                'created_at' => '2015-01-08 02:02:15',
                'updated_at' => '2015-01-08 02:02:15',
            ),
            
            array (
                'id' => 80,
                'name' => 'funny',
                'created_at' => '2015-01-08 02:11:47',
                'updated_at' => '2015-01-08 02:11:47',
            ),
            
            array (
                'id' => 81,
                'name' => 'comedy',
                'created_at' => '2015-01-08 02:11:47',
                'updated_at' => '2015-01-08 02:11:47',
            ),
            
            array (
                'id' => 82,
                'name' => 'nick offerman',
                'created_at' => '2015-01-08 02:11:47',
                'updated_at' => '2015-01-08 02:11:47',
            ),
            
            array (
                'id' => 83,
                'name' => 'inside out',
                'created_at' => '2015-01-08 02:52:48',
                'updated_at' => '2015-01-08 02:52:48',
            ),
            
            array (
                'id' => 84,
                'name' => 'disney',
                'created_at' => '2015-01-08 02:52:48',
                'updated_at' => '2015-01-08 02:52:48',
            ),
            
            array (
                'id' => 85,
                'name' => 'trailer',
                'created_at' => '2015-01-08 02:52:48',
                'updated_at' => '2015-01-08 02:52:48',
            ),
            
            array (
                'id' => 86,
                'name' => 'pixar',
                'created_at' => '2015-01-08 02:52:48',
                'updated_at' => '2015-01-08 02:52:48',
            ),
            
            array (
                'id' => 87,
                'name' => 'gru',
                'created_at' => '2015-01-08 03:16:37',
                'updated_at' => '2015-01-08 03:16:37',
            ),
            
            array (
                'id' => 88,
                'name' => 'minions',
                'created_at' => '2015-01-08 03:16:37',
                'updated_at' => '2015-01-08 03:16:37',
            ),
            
            array (
                'id' => 89,
                'name' => 'dispicable me',
                'created_at' => '2015-01-08 03:16:37',
                'updated_at' => '2015-01-08 03:16:37',
            ),
            
            array (
                'id' => 90,
                'name' => 'big buck bunny',
                'created_at' => '2015-01-22 14:41:28',
                'updated_at' => '2015-01-22 14:41:28',
            ),
            
            array (
                'id' => 91,
                'name' => 'blender',
                'created_at' => '2015-01-22 14:41:28',
                'updated_at' => '2015-01-22 14:41:28',
            ),
            
            array (
                'id' => 92,
                'name' => 'hobbit',
                'created_at' => '2015-01-24 08:08:05',
                'updated_at' => '2015-01-24 08:08:05',
            ),
            
            array (
                'id' => 93,
                'name' => 'lord of the rings',
                'created_at' => '2015-01-24 08:08:05',
                'updated_at' => '2015-01-24 08:08:05',
            ),
            
            array (
                'id' => 94,
                'name' => 'johnnyexpress',
                'created_at' => '2015-01-25 06:24:36',
                'updated_at' => '2015-01-25 06:24:36',
            ),
            
            array (
                'id' => 95,
                'name' => 'johnny',
                'created_at' => '2015-01-25 06:24:36',
                'updated_at' => '2015-01-25 06:24:36',
            ),
            
            array (
                'id' => 96,
                'name' => 'express',
                'created_at' => '2015-01-25 06:24:36',
                'updated_at' => '2015-01-25 06:24:36',
            ),
            
            array (
                'id' => 97,
                'name' => 'space',
                'created_at' => '2015-01-25 06:24:36',
                'updated_at' => '2015-01-25 06:24:36',
            ),
            
            array (
                'id' => 98,
                'name' => 'astronaut',
                'created_at' => '2015-01-25 06:24:36',
                'updated_at' => '2015-01-25 06:24:36',
            ),
            
            array (
                'id' => 99,
                'name' => 'crashes',
                'created_at' => '2015-01-29 15:21:35',
                'updated_at' => '2015-01-29 15:21:35',
            ),
            
            array (
                'id' => 100,
                'name' => 'fails',
                'created_at' => '2015-01-29 15:21:35',
                'updated_at' => '2015-01-29 15:21:35',
            ),
            
            array (
                'id' => 101,
                'name' => 'sports',
                'created_at' => '2015-01-29 15:21:35',
                'updated_at' => '2015-01-29 15:21:35',
            ),
            
            array (
                'id' => 102,
                'name' => 'dogs',
                'created_at' => '2015-01-29 15:48:07',
                'updated_at' => '2015-01-29 15:48:07',
            ),
            
            array (
                'id' => 103,
                'name' => 'pbs',
                'created_at' => '2015-01-29 15:48:07',
                'updated_at' => '2015-01-29 15:48:07',
            ),
            
            array (
                'id' => 104,
                'name' => 'learn',
                'created_at' => '2015-01-29 15:48:07',
                'updated_at' => '2015-01-29 15:48:07',
            ),
            
            array (
                'id' => 105,
                'name' => 'educational',
                'created_at' => '2015-01-29 15:48:07',
                'updated_at' => '2015-01-29 15:48:07',
            ),
            
            array (
                'id' => 106,
                'name' => 'trailers',
                'created_at' => '2015-01-29 16:07:19',
                'updated_at' => '2015-01-29 16:07:19',
            ),
            
            array (
                'id' => 107,
                'name' => 'jurassic world',
                'created_at' => '2015-01-29 16:07:19',
                'updated_at' => '2015-01-29 16:07:19',
            ),
            
            array (
                'id' => 108,
                'name' => 'jurassic park',
                'created_at' => '2015-01-29 16:07:19',
                'updated_at' => '2015-01-29 16:07:19',
            ),
            
            array (
                'id' => 109,
                'name' => 'steven spielberg',
                'created_at' => '2015-01-29 16:07:19',
                'updated_at' => '2015-01-29 16:07:19',
            ),
            
            array (
                'id' => 110,
                'name' => 'biking',
                'created_at' => '2015-01-30 16:30:59',
                'updated_at' => '2015-01-30 16:30:59',
            ),
            
            array (
                'id' => 111,
                'name' => 'woods',
                'created_at' => '2015-01-30 16:30:59',
                'updated_at' => '2015-01-30 16:30:59',
            ),
            
            array (
                'id' => 112,
                'name' => 'mud',
                'created_at' => '2015-01-30 16:30:59',
                'updated_at' => '2015-01-30 16:30:59',
            ),
            
            array (
                'id' => 113,
                'name' => 'bike',
                'created_at' => '2015-01-30 16:30:59',
                'updated_at' => '2015-01-30 16:30:59',
            ),
            
            array (
                'id' => 117,
                'name' => 'supply',
                'created_at' => '2015-02-15 06:59:44',
                'updated_at' => '2015-02-15 06:59:44',
            ),
            
            array (
                'id' => 118,
                'name' => 'demand',
                'created_at' => '2015-02-15 06:59:44',
                'updated_at' => '2015-02-15 06:59:44',
            ),
            
            array (
                'id' => 119,
                'name' => 'theory',
                'created_at' => '2015-02-15 06:59:44',
                'updated_at' => '2015-02-15 06:59:44',
            ),
            
            array (
                'id' => 120,
                'name' => 'marketing',
                'created_at' => '2015-02-15 06:59:44',
                'updated_at' => '2015-02-15 06:59:44',
            ),
            
            array (
                'id' => 121,
                'name' => 'strategy',
                'created_at' => '2015-02-15 06:59:44',
                'updated_at' => '2015-02-15 06:59:44',
            ),
            
            array (
                'id' => 122,
                'name' => 'football',
                'created_at' => '2015-02-18 06:03:31',
                'updated_at' => '2015-02-18 06:03:31',
            ),
            
            array (
                'id' => 123,
                'name' => 'soccer',
                'created_at' => '2015-02-18 06:03:31',
                'updated_at' => '2015-02-18 06:03:31',
            ),
            
            array (
                'id' => 124,
                'name' => 'hockey',
                'created_at' => '2015-02-18 06:03:31',
                'updated_at' => '2015-02-18 06:03:31',
            ),
            
            array (
                'id' => 125,
                'name' => 'top 10',
                'created_at' => '2015-02-18 06:03:31',
                'updated_at' => '2015-02-18 06:03:31',
            ),
            
            array (
                'id' => 126,
                'name' => 'sports center',
                'created_at' => '2015-02-18 06:03:31',
                'updated_at' => '2015-02-18 06:03:31',
            ),
            
            array (
                'id' => 127,
                'name' => 'lines',
                'created_at' => '2015-02-20 14:41:57',
                'updated_at' => '2015-02-20 14:41:57',
            ),
            
            array (
                'id' => 128,
                'name' => 'borders',
                'created_at' => '2015-02-20 14:41:57',
                'updated_at' => '2015-02-20 14:41:57',
            ),
            
            array (
                'id' => 129,
                'name' => 'harvard sailing team',
                'created_at' => '2015-02-20 15:00:35',
                'updated_at' => '2015-02-20 15:00:35',
            ),
            
            array (
                'id' => 130,
                'name' => 'harvard',
                'created_at' => '2015-02-20 15:00:35',
                'updated_at' => '2015-02-20 15:00:35',
            ),
            
            array (
                'id' => 131,
                'name' => 'biggest loser',
                'created_at' => '2015-02-20 15:00:35',
                'updated_at' => '2015-02-20 15:00:35',
            ),
            
            array (
                'id' => 132,
                'name' => 'how to',
                'created_at' => '2015-02-21 02:39:42',
                'updated_at' => '2015-02-21 02:39:42',
            ),
            
            array (
                'id' => 133,
                'name' => 'surf',
                'created_at' => '2015-02-21 02:39:42',
                'updated_at' => '2015-02-21 02:39:42',
            ),
            
            array (
                'id' => 134,
                'name' => 'dslr',
                'created_at' => '2015-02-21 02:52:15',
                'updated_at' => '2015-02-21 02:52:15',
            ),
            
            array (
                'id' => 135,
                'name' => 'how-to',
                'created_at' => '2015-02-21 02:52:15',
                'updated_at' => '2015-02-21 02:52:15',
            ),
            
            array (
                'id' => 136,
                'name' => 'learn about dslr',
                'created_at' => '2015-02-21 02:52:15',
                'updated_at' => '2015-02-21 02:52:15',
            ),
            
            array (
                'id' => 137,
                'name' => 'cooking',
                'created_at' => '2015-02-22 02:35:01',
                'updated_at' => '2015-02-22 02:35:01',
            ),
            
            array (
                'id' => 138,
                'name' => 'salmon',
                'created_at' => '2015-02-22 02:35:01',
                'updated_at' => '2015-02-22 02:35:01',
            ),
            
            array (
                'id' => 139,
                'name' => 'food',
                'created_at' => '2015-02-22 02:35:01',
                'updated_at' => '2015-02-22 02:35:01',
            ),
            
            array (
                'id' => 140,
                'name' => 'nutrition',
                'created_at' => '2015-02-22 02:35:01',
                'updated_at' => '2015-02-22 02:35:01',
            ),
            
            array (
                'id' => 141,
                'name' => 'greens',
                'created_at' => '2015-02-22 02:39:08',
                'updated_at' => '2015-02-22 02:39:08',
            ),
            
            array (
                'id' => 142,
                'name' => 'pancakes',
                'created_at' => '2015-02-22 14:56:01',
                'updated_at' => '2015-02-22 14:56:01',
            ),
            
            array (
                'id' => 143,
                'name' => 'pancake day',
                'created_at' => '2015-02-22 14:56:01',
                'updated_at' => '2015-02-22 14:56:01',
            ),
            
            array (
                'id' => 144,
                'name' => 'spiderman',
                'created_at' => '2015-02-23 16:32:01',
                'updated_at' => '2015-02-23 16:32:01',
            ),
            
            array (
                'id' => 145,
                'name' => 'spider-man',
                'created_at' => '2015-02-23 16:32:01',
                'updated_at' => '2015-02-23 16:32:01',
            ),
            
            array (
                'id' => 146,
                'name' => 'spider-man 2',
                'created_at' => '2015-02-23 16:32:01',
                'updated_at' => '2015-02-23 16:32:01',
            ),
            
            array (
                'id' => 147,
                'name' => 'the amazing spider-man',
                'created_at' => '2015-02-23 16:32:01',
                'updated_at' => '2015-02-23 16:32:01',
            ),
            
            array (
                'id' => 148,
                'name' => 'avengers',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 149,
                'name' => 'marvel',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 150,
                'name' => 'thor',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 151,
                'name' => 'iron man',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 152,
                'name' => 'the hulk',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 153,
                'name' => 'captain america',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 154,
                'name' => 'the avengers',
                'created_at' => '2015-02-23 16:50:43',
                'updated_at' => '2015-02-23 16:50:43',
            ),
            
            array (
                'id' => 155,
                'name' => 'ninja turtles',
                'created_at' => '2015-02-26 02:06:05',
                'updated_at' => '2015-02-26 02:06:05',
            ),
        ));
        
        
    }
}