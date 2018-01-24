<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            
            array (
                'id' => 1,
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'default.jpg',
                'password' => '$2y$10$5Fc22NHVyVf.i6JQ0bb2e.QkIKFnOtBrpaOcrse3LvKDPWrP6A.de',
                'role' => 'admin',
                'active' => 1,
                'created_at' => '2014-08-26 23:43:33',
                'updated_at' => '2015-06-16 16:59:31',
                'activation_code' => NULL,
                'remember_token' => 'W2eUl3Rmck3pluwwgEh0l1fDv1WBlHFi6gWVZHJwOaAlwrKvBYMJJDU6VhId',
                'stripe_active' => 1,
                'session_id' => NULL,
                'stripe_id' => NULL,
                'stripe_subscription' => NULL,
                'stripe_plan' => NULL,
                'last_four' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'subscription_ends_at' => NULL,
                'card_brand' => NULL,
            ),
            
            array (
                'id' => 2,
                'username' => 'demo',
                'email' => 'demo@demo.com',
                'avatar' => 'default.jpg',
                'password' => '$2y$10$ltJIM5z0dHJalcAYIS5OduHzsmVEGO9rhaSStTu8fBdZPTw82BhVK',
                'role' => 'demo',
                'active' => 1,
                'created_at' => '2014-12-21 19:26:04',
                'updated_at' => '2015-06-14 20:51:26',
                'activation_code' => NULL,
                'remember_token' => '6VYSwEOJ4w7ganj5E4tQEO7cLmHPb9Y3wURRqKwgkCPf51RFEV6OUXZslgJv',
                'stripe_active' => 0,
                'session_id' => NULL,
                'stripe_id' => NULL,
                'stripe_subscription' => NULL,
                'stripe_plan' => NULL,
                'last_four' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'subscription_ends_at' => NULL,
                'card_brand' => NULL,
            ),
        ));
        
        
    }
}