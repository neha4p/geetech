<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            
            array (
                'id' => 1,
                'user_id' => 1,
                'title' => 'Frequently Asked Questions',
                'slug' => 'faq',
                'body' => '<div style="width: 47%; margin-right: 3%; float: left; height: 270px;">
<p class="theme_color_background" style="padding: 10px; color: #fff; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">What is HelloVideo?</p>
<p style="color: #8a929d; font-size: 14px;">Hello Video is a Premium Video Content Management System. As an admin you\'ll be able to add Videos and Articles to your website. You can choose to make your content available for free or only to subscribers. You can link a <a href="http://www.stripe.com" target="_blank">Stripe</a> account to your site and allow for users to subscribe to your site and unlock the premium content. You add your videos, add your articles, add your price point, and you rake in money from your subscribers</p>
</div>
<div style="width: 47%; margin-left: 3%; float: left; height: 270px;">
<p class="theme_color_background" style="padding: 10px 20px; color: #fff; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">What is HelloVideo?</p>
<p style="color: #8a929d; font-size: 14px;">Hello Video is a Premium Video Content Management System. As an admin you\'ll be able to add Videos and Articles to your website. You can choose to make your content available for free or only to subscribers. You can link a <a href="http://www.stripe.com" target="_blank">Stripe</a> account to your site and allow for users to subscribe to your site and unlock the premium content. You add your videos, add your articles, add your price point, and you rake in money from your subscribers</p>
</div>
<div style="width: 47%; margin-right: 3%; float: left; height: 270px;">
<p class="theme_color_background" style="padding: 10px 20px; color: #fff; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">What is HelloVideo?</p>
<p style="color: #8a929d; font-size: 14px;">Hello Video is a Premium Video Content Management System. As an admin you\'ll be able to add Videos and Articles to your website. You can choose to make your content available for free or only to subscribers. You can link a <a href="http://www.stripe.com" target="_blank">Stripe</a> account to your site and allow for users to subscribe to your site and unlock the premium content. You add your videos, add your articles, add your price point, and you rake in money from your subscribers</p>
</div>
<div style="width: 47%; margin-left: 3%; float: left; height: 270px;">
<p class="theme_color_background" style="padding: 10px 20px; color: #fff; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">What is HelloVideo?</p>
<p style="color: #8a929d; font-size: 14px;">Hello Video is a Premium Video Content Management System. As an admin you\'ll be able to add Videos and Articles to your website. You can choose to make your content available for free or only to subscribers. You can link a <a href="http://www.stripe.com" target="_blank">Stripe</a> account to your site and allow for users to subscribe to your site and unlock the premium content. You add your videos, add your articles, add your price point, and you rake in money from your subscribers</p>
</div>
<div style="width: 47%; margin-right: 3%; float: left; height: 270px;">
<p class="theme_color_background" style="padding: 10px 20px; color: #fff; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">What is HelloVideo?</p>
<p style="color: #8a929d; font-size: 14px;">Hello Video is a Premium Video Content Management System. As an admin you\'ll be able to add Videos and Articles to your website. You can choose to make your content available for free or only to subscribers. You can link a <a href="http://www.stripe.com" target="_blank">Stripe</a> account to your site and allow for users to subscribe to your site and unlock the premium content. You add your videos, add your articles, add your price point, and you rake in money from your subscribers</p>
</div>
<div style="width: 47%; margin-left: 3%; float: left; height: 270px;">
<p class="theme_color_background" style="padding: 10px 20px; color: #fff; border-radius: 5px; font-weight: bold; font-size: 16px; text-align: center;">What is HelloVideo?</p>
<p style="color: #8a929d; font-size: 14px;">Hello Video is a Premium Video Content Management System. As an admin you\'ll be able to add Videos and Articles to your website. You can choose to make your content available for free or only to subscribers. You can link a <a href="http://www.stripe.com" target="_blank">Stripe</a> account to your site and allow for users to subscribe to your site and unlock the premium content. You add your videos, add your articles, add your price point, and you rake in money from your subscribers</p>
</div>',
                'active' => 1,
                'created_at' => '2015-01-10 03:47:27',
                'updated_at' => '2015-02-05 14:05:39',
            ),
        ));
        
        
    }
}