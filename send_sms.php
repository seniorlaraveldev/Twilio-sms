<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC06b030a5c22b0c3efc0dacc33bc3a1a6';
$auth_token = 'f5fd8b573519e3d99cadd28e75beb9f8';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+12016273458";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
// Where to send a text message (your cell phone?)
    '+8618640211091',
    array(
        'from' => $twilio_number,
        'body' => 'I sent this message in under 20 minutes!'
    )
);