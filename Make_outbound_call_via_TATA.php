<?php

$tcxc_host = "https://members.telecomsxchange.com";

//TCXC (TelecomsXChange) Buyer login
$login = "{{ Buyer_Username }}";

//TCXC (TelecomsXChange) API key, Generated from Buyer Portal, Preferences Page:

$api_key = "{{ API_KEY }}";

//TCXC i_account that you want to use for Callback billing, 


$i_account = 1;  // You can get account ID from Accounts Page


//legA parameters

$cld1 = "19542405555";  //First number to dial
$cli1 = "1800999999";  // Caller ID to show first number
$i_connection1 = 220;  // Carrier to use e.g 220 is TATA Communications

//legB parameters
$cld2 = "18667478647"; //Second number to dial
$cli2 = "19542405412"; //Caller ID t show destination number
$i_connection2 = 220;  // Carrier to use e.g 220 is Tata Communciations

$ts = time();   // Get Current Time Stamp

$check_uri = "/api/callback/initiate/$login/$i_account/$cld1/$cli1/$i_connection1/$cld2/$cli2/$i_connection2/$ts/";

// Signing the API key for better security

$sign = hash('sha256',$check_uri . $api_key);

// initiate the call from your script

$handle=curl_init( $tcxc_host . $check_uri . $sign );

curl_setopt($handle, CURLOPT_VERBOSE, true);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);

$content = curl_exec($handle);

echo $content;
