<?php

use Illuminate\Database\Seeder;

class TagVideoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tag_video')->delete();
        
        \DB::table('tag_video')->insert(array (
            
            array (
                'id' => 5,
                'video_id' => 1,
                'tag_id' => 3,
            ),
            
            array (
                'id' => 6,
                'video_id' => 1,
                'tag_id' => 4,
            ),
            
            array (
                'id' => 10,
                'video_id' => 1,
                'tag_id' => 7,
            ),
            
            array (
                'id' => 11,
                'video_id' => 1,
                'tag_id' => 8,
            ),
            
            array (
                'id' => 14,
                'video_id' => 1,
                'tag_id' => 10,
            ),
            
            array (
                'id' => 16,
                'video_id' => 2,
                'tag_id' => 10,
            ),
            
            array (
                'id' => 17,
                'video_id' => 2,
                'tag_id' => 11,
            ),
            
            array (
                'id' => 19,
                'video_id' => 2,
                'tag_id' => 13,
            ),
            
            array (
                'id' => 27,
                'video_id' => 11,
                'tag_id' => 21,
            ),
            
            array (
                'id' => 28,
                'video_id' => 11,
                'tag_id' => 22,
            ),
            
            array (
                'id' => 29,
                'video_id' => 11,
                'tag_id' => 23,
            ),
            
            array (
                'id' => 30,
                'video_id' => 11,
                'tag_id' => 24,
            ),
            
            array (
                'id' => 31,
                'video_id' => 11,
                'tag_id' => 25,
            ),
            
            array (
                'id' => 32,
                'video_id' => 11,
                'tag_id' => 26,
            ),
            
            array (
                'id' => 33,
                'video_id' => 11,
                'tag_id' => 27,
            ),
            
            array (
                'id' => 34,
                'video_id' => 12,
                'tag_id' => 28,
            ),
            
            array (
                'id' => 35,
                'video_id' => 12,
                'tag_id' => 29,
            ),
            
            array (
                'id' => 36,
                'video_id' => 12,
                'tag_id' => 30,
            ),
            
            array (
                'id' => 37,
                'video_id' => 12,
                'tag_id' => 31,
            ),
            
            array (
                'id' => 38,
                'video_id' => 12,
                'tag_id' => 32,
            ),
            
            array (
                'id' => 39,
                'video_id' => 12,
                'tag_id' => 33,
            ),
            
            array (
                'id' => 40,
                'video_id' => 12,
                'tag_id' => 34,
            ),
            
            array (
                'id' => 41,
                'video_id' => 12,
                'tag_id' => 35,
            ),
            
            array (
                'id' => 42,
                'video_id' => 12,
                'tag_id' => 36,
            ),
            
            array (
                'id' => 43,
                'video_id' => 13,
                'tag_id' => 37,
            ),
            
            array (
                'id' => 44,
                'video_id' => 13,
                'tag_id' => 38,
            ),
            
            array (
                'id' => 45,
                'video_id' => 13,
                'tag_id' => 39,
            ),
            
            array (
                'id' => 46,
                'video_id' => 13,
                'tag_id' => 40,
            ),
            
            array (
                'id' => 47,
                'video_id' => 13,
                'tag_id' => 41,
            ),
            
            array (
                'id' => 48,
                'video_id' => 14,
                'tag_id' => 42,
            ),
            
            array (
                'id' => 49,
                'video_id' => 14,
                'tag_id' => 43,
            ),
            
            array (
                'id' => 50,
                'video_id' => 14,
                'tag_id' => 44,
            ),
            
            array (
                'id' => 51,
                'video_id' => 15,
                'tag_id' => 45,
            ),
            
            array (
                'id' => 52,
                'video_id' => 15,
                'tag_id' => 46,
            ),
            
            array (
                'id' => 53,
                'video_id' => 16,
                'tag_id' => 47,
            ),
            
            array (
                'id' => 54,
                'video_id' => 16,
                'tag_id' => 48,
            ),
            
            array (
                'id' => 55,
                'video_id' => 16,
                'tag_id' => 49,
            ),
            
            array (
                'id' => 56,
                'video_id' => 16,
                'tag_id' => 50,
            ),
            
            array (
                'id' => 58,
                'video_id' => 17,
                'tag_id' => 10,
            ),
            
            array (
                'id' => 59,
                'video_id' => 17,
                'tag_id' => 52,
            ),
            
            array (
                'id' => 60,
                'video_id' => 17,
                'tag_id' => 53,
            ),
            
            array (
                'id' => 61,
                'video_id' => 17,
                'tag_id' => 54,
            ),
            
            array (
                'id' => 62,
                'video_id' => 17,
                'tag_id' => 55,
            ),
            
            array (
                'id' => 63,
                'video_id' => 17,
                'tag_id' => 56,
            ),
            
            array (
                'id' => 64,
                'video_id' => 18,
                'tag_id' => 57,
            ),
            
            array (
                'id' => 65,
                'video_id' => 18,
                'tag_id' => 58,
            ),
            
            array (
                'id' => 66,
                'video_id' => 18,
                'tag_id' => 59,
            ),
            
            array (
                'id' => 67,
                'video_id' => 18,
                'tag_id' => 60,
            ),
            
            array (
                'id' => 68,
                'video_id' => 19,
                'tag_id' => 61,
            ),
            
            array (
                'id' => 69,
                'video_id' => 19,
                'tag_id' => 62,
            ),
            
            array (
                'id' => 70,
                'video_id' => 19,
                'tag_id' => 63,
            ),
            
            array (
                'id' => 71,
                'video_id' => 19,
                'tag_id' => 64,
            ),
            
            array (
                'id' => 72,
                'video_id' => 19,
                'tag_id' => 65,
            ),
            
            array (
                'id' => 73,
                'video_id' => 20,
                'tag_id' => 66,
            ),
            
            array (
                'id' => 74,
                'video_id' => 20,
                'tag_id' => 67,
            ),
            
            array (
                'id' => 75,
                'video_id' => 20,
                'tag_id' => 68,
            ),
            
            array (
                'id' => 76,
                'video_id' => 20,
                'tag_id' => 69,
            ),
            
            array (
                'id' => 78,
                'video_id' => 22,
                'tag_id' => 70,
            ),
            
            array (
                'id' => 79,
                'video_id' => 22,
                'tag_id' => 71,
            ),
            
            array (
                'id' => 80,
                'video_id' => 22,
                'tag_id' => 72,
            ),
            
            array (
                'id' => 81,
                'video_id' => 22,
                'tag_id' => 73,
            ),
            
            array (
                'id' => 82,
                'video_id' => 23,
                'tag_id' => 74,
            ),
            
            array (
                'id' => 83,
                'video_id' => 23,
                'tag_id' => 75,
            ),
            
            array (
                'id' => 84,
                'video_id' => 23,
                'tag_id' => 76,
            ),
            
            array (
                'id' => 85,
                'video_id' => 24,
                'tag_id' => 77,
            ),
            
            array (
                'id' => 86,
                'video_id' => 24,
                'tag_id' => 78,
            ),
            
            array (
                'id' => 87,
                'video_id' => 24,
                'tag_id' => 79,
            ),
            
            array (
                'id' => 88,
                'video_id' => 25,
                'tag_id' => 42,
            ),
            
            array (
                'id' => 89,
                'video_id' => 25,
                'tag_id' => 80,
            ),
            
            array (
                'id' => 90,
                'video_id' => 25,
                'tag_id' => 81,
            ),
            
            array (
                'id' => 91,
                'video_id' => 25,
                'tag_id' => 82,
            ),
            
            array (
                'id' => 92,
                'video_id' => 26,
                'tag_id' => 83,
            ),
            
            array (
                'id' => 93,
                'video_id' => 26,
                'tag_id' => 84,
            ),
            
            array (
                'id' => 94,
                'video_id' => 26,
                'tag_id' => 85,
            ),
            
            array (
                'id' => 95,
                'video_id' => 26,
                'tag_id' => 86,
            ),
            
            array (
                'id' => 96,
                'video_id' => 26,
                'tag_id' => 67,
            ),
            
            array (
                'id' => 97,
                'video_id' => 27,
                'tag_id' => 87,
            ),
            
            array (
                'id' => 98,
                'video_id' => 27,
                'tag_id' => 88,
            ),
            
            array (
                'id' => 99,
                'video_id' => 27,
                'tag_id' => 89,
            ),
            
            array (
                'id' => 100,
                'video_id' => 27,
                'tag_id' => 80,
            ),
            
            array (
                'id' => 101,
                'video_id' => 27,
                'tag_id' => 81,
            ),
            
            array (
                'id' => 102,
                'video_id' => 28,
                'tag_id' => 90,
            ),
            
            array (
                'id' => 103,
                'video_id' => 28,
                'tag_id' => 85,
            ),
            
            array (
                'id' => 104,
                'video_id' => 28,
                'tag_id' => 79,
            ),
            
            array (
                'id' => 105,
                'video_id' => 28,
                'tag_id' => 91,
            ),
            
            array (
                'id' => 106,
                'video_id' => 29,
                'tag_id' => 85,
            ),
            
            array (
                'id' => 107,
                'video_id' => 29,
                'tag_id' => 92,
            ),
            
            array (
                'id' => 108,
                'video_id' => 29,
                'tag_id' => 93,
            ),
            
            array (
                'id' => 109,
                'video_id' => 30,
                'tag_id' => 94,
            ),
            
            array (
                'id' => 110,
                'video_id' => 30,
                'tag_id' => 95,
            ),
            
            array (
                'id' => 111,
                'video_id' => 30,
                'tag_id' => 96,
            ),
            
            array (
                'id' => 112,
                'video_id' => 30,
                'tag_id' => 80,
            ),
            
            array (
                'id' => 113,
                'video_id' => 30,
                'tag_id' => 81,
            ),
            
            array (
                'id' => 114,
                'video_id' => 30,
                'tag_id' => 97,
            ),
            
            array (
                'id' => 115,
                'video_id' => 30,
                'tag_id' => 98,
            ),
            
            array (
                'id' => 116,
                'video_id' => 31,
                'tag_id' => 99,
            ),
            
            array (
                'id' => 117,
                'video_id' => 31,
                'tag_id' => 100,
            ),
            
            array (
                'id' => 118,
                'video_id' => 31,
                'tag_id' => 101,
            ),
            
            array (
                'id' => 119,
                'video_id' => 32,
                'tag_id' => 102,
            ),
            
            array (
                'id' => 120,
                'video_id' => 32,
                'tag_id' => 103,
            ),
            
            array (
                'id' => 121,
                'video_id' => 32,
                'tag_id' => 104,
            ),
            
            array (
                'id' => 122,
                'video_id' => 32,
                'tag_id' => 105,
            ),
            
            array (
                'id' => 123,
                'video_id' => 33,
                'tag_id' => 106,
            ),
            
            array (
                'id' => 124,
                'video_id' => 33,
                'tag_id' => 107,
            ),
            
            array (
                'id' => 125,
                'video_id' => 33,
                'tag_id' => 108,
            ),
            
            array (
                'id' => 126,
                'video_id' => 33,
                'tag_id' => 109,
            ),
            
            array (
                'id' => 127,
                'video_id' => 34,
                'tag_id' => 110,
            ),
            
            array (
                'id' => 128,
                'video_id' => 34,
                'tag_id' => 75,
            ),
            
            array (
                'id' => 129,
                'video_id' => 34,
                'tag_id' => 111,
            ),
            
            array (
                'id' => 130,
                'video_id' => 34,
                'tag_id' => 112,
            ),
            
            array (
                'id' => 131,
                'video_id' => 34,
                'tag_id' => 113,
            ),
            
            array (
                'id' => 132,
                'video_id' => 9,
                'tag_id' => 51,
            ),
            
            array (
                'id' => 136,
                'video_id' => 36,
                'tag_id' => 117,
            ),
            
            array (
                'id' => 137,
                'video_id' => 36,
                'tag_id' => 118,
            ),
            
            array (
                'id' => 138,
                'video_id' => 36,
                'tag_id' => 119,
            ),
            
            array (
                'id' => 139,
                'video_id' => 36,
                'tag_id' => 120,
            ),
            
            array (
                'id' => 140,
                'video_id' => 36,
                'tag_id' => 121,
            ),
            
            array (
                'id' => 141,
                'video_id' => 37,
                'tag_id' => 122,
            ),
            
            array (
                'id' => 142,
                'video_id' => 37,
                'tag_id' => 123,
            ),
            
            array (
                'id' => 143,
                'video_id' => 37,
                'tag_id' => 124,
            ),
            
            array (
                'id' => 144,
                'video_id' => 37,
                'tag_id' => 125,
            ),
            
            array (
                'id' => 145,
                'video_id' => 37,
                'tag_id' => 126,
            ),
            
            array (
                'id' => 146,
                'video_id' => 38,
                'tag_id' => 80,
            ),
            
            array (
                'id' => 147,
                'video_id' => 38,
                'tag_id' => 81,
            ),
            
            array (
                'id' => 148,
                'video_id' => 38,
                'tag_id' => 127,
            ),
            
            array (
                'id' => 149,
                'video_id' => 38,
                'tag_id' => 128,
            ),
            
            array (
                'id' => 150,
                'video_id' => 39,
                'tag_id' => 129,
            ),
            
            array (
                'id' => 151,
                'video_id' => 39,
                'tag_id' => 130,
            ),
            
            array (
                'id' => 152,
                'video_id' => 39,
                'tag_id' => 131,
            ),
            
            array (
                'id' => 153,
                'video_id' => 39,
                'tag_id' => 80,
            ),
            
            array (
                'id' => 154,
                'video_id' => 40,
                'tag_id' => 132,
            ),
            
            array (
                'id' => 155,
                'video_id' => 40,
                'tag_id' => 133,
            ),
            
            array (
                'id' => 156,
                'video_id' => 41,
                'tag_id' => 134,
            ),
            
            array (
                'id' => 157,
                'video_id' => 41,
                'tag_id' => 132,
            ),
            
            array (
                'id' => 158,
                'video_id' => 41,
                'tag_id' => 135,
            ),
            
            array (
                'id' => 159,
                'video_id' => 41,
                'tag_id' => 136,
            ),
            
            array (
                'id' => 160,
                'video_id' => 42,
                'tag_id' => 137,
            ),
            
            array (
                'id' => 161,
                'video_id' => 42,
                'tag_id' => 138,
            ),
            
            array (
                'id' => 162,
                'video_id' => 42,
                'tag_id' => 139,
            ),
            
            array (
                'id' => 163,
                'video_id' => 42,
                'tag_id' => 140,
            ),
            
            array (
                'id' => 164,
                'video_id' => 43,
                'tag_id' => 141,
            ),
            
            array (
                'id' => 165,
                'video_id' => 43,
                'tag_id' => 140,
            ),
            
            array (
                'id' => 166,
                'video_id' => 43,
                'tag_id' => 139,
            ),
            
            array (
                'id' => 167,
                'video_id' => 44,
                'tag_id' => 137,
            ),
            
            array (
                'id' => 168,
                'video_id' => 44,
                'tag_id' => 142,
            ),
            
            array (
                'id' => 169,
                'video_id' => 44,
                'tag_id' => 143,
            ),
            
            array (
                'id' => 170,
                'video_id' => 45,
                'tag_id' => 144,
            ),
            
            array (
                'id' => 171,
                'video_id' => 45,
                'tag_id' => 145,
            ),
            
            array (
                'id' => 172,
                'video_id' => 45,
                'tag_id' => 146,
            ),
            
            array (
                'id' => 173,
                'video_id' => 45,
                'tag_id' => 147,
            ),
            
            array (
                'id' => 174,
                'video_id' => 46,
                'tag_id' => 148,
            ),
            
            array (
                'id' => 175,
                'video_id' => 46,
                'tag_id' => 149,
            ),
            
            array (
                'id' => 176,
                'video_id' => 46,
                'tag_id' => 150,
            ),
            
            array (
                'id' => 177,
                'video_id' => 46,
                'tag_id' => 151,
            ),
            
            array (
                'id' => 178,
                'video_id' => 46,
                'tag_id' => 152,
            ),
            
            array (
                'id' => 179,
                'video_id' => 46,
                'tag_id' => 153,
            ),
            
            array (
                'id' => 180,
                'video_id' => 46,
                'tag_id' => 154,
            ),
            
            array (
                'id' => 181,
                'video_id' => 47,
                'tag_id' => 11,
            ),
            
            array (
                'id' => 182,
                'video_id' => 47,
                'tag_id' => 155,
            ),
            
            array (
                'id' => 183,
                'video_id' => 47,
                'tag_id' => 85,
            ),
        ));
        
        
    }
}