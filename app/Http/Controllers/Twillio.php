<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
class Twillio extends Controller
{
    //

    public function test()
    {
      $account_sid = 'AC91e63b241926db2aa9256bf9e99b2ff8';
$auth_token = '4de2281e791c92155b35095fa39a1f9d';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
  $client = new Client($account_sid, $auth_token);
$twilio_number = "+19792436582 ";
try {
        // Initiate a new outbound call
        $call = $client->account->calls->create(
            // Step 4: Change the 'To' number below to whatever number you'd like
            // to call.
            "+919916358333",

            // Step 5: Change the 'From' number below to be a valid Twilio number
            // that you've purchased or verified with Twilio.
            "+19792436582",

            // Step 6: Set the URL Twilio will request when the call is answered.
            array("url" => "http://demo.twilio.com/welcome/voice/")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
// $client = new Client($account_sid, $auth_token);
// $client->messages->create(
//     // Where to send a text message (your cell phone?)
//     '+919035220894',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Your Two Step Authentication Code is 346105. -Auth Ellipsonic'
//     )
// );

    }
}
