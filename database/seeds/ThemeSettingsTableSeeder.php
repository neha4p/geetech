<?php

use Illuminate\Database\Seeder;

class ThemeSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('theme_settings')->delete();
        
        \DB::table('theme_settings')->insert(array (
            
            array (
                'id' => 1,
                'theme_slug' => 'tubed',
                'key' => 'footer_description',
                'value' => 'Sarah Bio',
                'created_at' => '2018-01-24 21:39:44',
                'updated_at' => '2018-01-24 21:39:44',
            ),
            
            array (
                'id' => 2,
                'theme_slug' => 'tubed',
                'key' => 'signup_message',
                'value' => NULL,
                'created_at' => '2018-01-24 21:40:19',
                'updated_at' => '2018-01-24 21:40:19',
            ),
            
            array (
                'id' => 3,
                'theme_slug' => 'tubed',
                'key' => 'disqus_shortname',
                'value' => NULL,
                'created_at' => '2018-01-24 21:40:19',
                'updated_at' => '2018-01-24 21:40:19',
            ),
            
            array (
                'id' => 4,
                'theme_slug' => 'tubed',
                'key' => 'color',
                'value' => NULL,
                'created_at' => '2018-01-24 21:40:19',
                'updated_at' => '2018-01-24 21:40:19',
            ),
            
            array (
                'id' => 5,
                'theme_slug' => 'tubed',
                'key' => 'custom_css',
                'value' => NULL,
                'created_at' => '2018-01-24 21:40:19',
                'updated_at' => '2018-01-24 21:40:19',
            ),
            
            array (
                'id' => 6,
                'theme_slug' => 'tubed',
                'key' => 'custom_js',
                'value' => NULL,
                'created_at' => '2018-01-24 21:40:20',
                'updated_at' => '2018-01-24 21:40:20',
            ),
            
            array (
                'id' => 7,
                'theme_slug' => 'tubed',
                'key' => '_token',
                'value' => '1qpnVInh5nAeGp2h6pxFQgz0oP5Qqn2xnov4hap5',
                'created_at' => '2018-01-24 21:40:20',
                'updated_at' => '2018-01-24 21:40:20',
            ),
        ));
        
        
    }
}