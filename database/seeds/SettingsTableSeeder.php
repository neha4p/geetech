<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            
            array (
                'id' => 1,
                'website_name' => 'Tantric Activiation',
                'website_description' => '',
                'logo' => '',
                'favicon' => '',
                'system_email' => 'support@tantricactivation.com',
                'demo_mode' => 1,
                'enable_https' => 0,
                'theme' => 'tubed',
                'facebook_page_id' => '',
                'google_page_id' => '',
                'twitter_page_id' => '',
                'youtube_page_id' => '',
                'google_tracking_id' => NULL,
                'google_oauth_key' => NULL,
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2018-01-16 23:33:06',
                'videos_per_page' => 6,
                'posts_per_page' => 6,
                'free_registration' => 0,
                'activation_email' => 0,
                'premium_upgrade' => 1,
            ),
        ));
        
        
    }
}