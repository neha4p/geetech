<?php

use Illuminate\Database\Seeder;

class PaymentSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_settings')->delete();
        
        \DB::table('payment_settings')->insert(array (
            
            array (
                'id' => 1,
                'live_mode' => 0,
                'test_secret_key' => 'sk_test_cCbWFs5oVq9oBBkjYRL0JOrv',
                'test_publishable_key' => 'pk_test_ij4YIyJQ0Z1CE65GldawsLJ4',
                'live_secret_key' => 'sk_test_cCbWFs5oVq9oBBkjYRL0JOrv',
                'live_publishable_key' => 'pk_test_ij4YIyJQ0Z1CE65GldawsLJ4',
            ),
        ));
        
        
    }
}