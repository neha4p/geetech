<?php

return [
    'api_url'    => env('ACTIVE_CAMPAIGN_API_URL'),
    'api_key'    => env('ACTIVE_CAMPAIGN_API_KEY'),
    'event_key'  => env('ACTIVE_CAMPAIGN_API_EVENT_KEY'),
    'account_id' => env('ACTIVE_CAMPAIGN_ACCOUNT_ID'),
    /*
     * List ID based on segments
     */
    'prospect_list_id' => env('ACTIVE_CAMPAIGN_PROSPECT_LIST','0'),
    'active_list_id' => env('ACTIVE_CAMPAIGN_ACTIVE_LIST','0'),
    'cancel_list_id' => env('ACTIVE_CAMPAIGN_CANCEL_LIST','0'),
    'refund_list_id' => env('ACTIVE_CAMPAIGN_REFUND_LIST','0'),
    'declined_list_id' => env('ACTIVE_CAMPAIGN_DECLINED_LIST','0'),
];
