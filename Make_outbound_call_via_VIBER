

<?php

// The number your dialing must be online with Viber in order to be able to reach them.




// Include API key and other required authentication data
include 'auth.php';


// import carrier i_connection ids by name
include 'carrier.php';  



// leg A parameters
$cld1 = "19542401111";  //First number to dial
$cli1 = "1800999999";  // Caller ID to show first number
$i_connection1 = $VIBER;  // Carrier to use is viber Communications


// leg B parameters

$cld2 = "18667471117"; //Second number to dial- The number subscribed to Viber
$cli2 = "12345678988"; //Caller ID t show destination number
$i_connection2 = $VIBER;  // Carrier to use is viber
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

