<?php


include 'auth.php'; // import tcxc api authnetication details

include 'functions.php';  // import functions

include 'carrier.php';  // import carrier i_connection ids by name


//leg A parameters

$cld1 = "19542405555";  //First number to dial
$cli1 = "1800999999";  // Caller ID to show first number
$i_connection1 = $TATA;  // Carrier to use is TATA Communications

//leg B parameters
$cld2 = "18667471117"; //Second number to dial
$cli2 = "12345678988"; //Caller ID t show destination number
$i_connection2 = $VIBER;  // Carrier to use e.g 529 is viber

$ts = time();   // Get Current Time Stamp

$check_uri = "/api/callback/initiate/$login/$i_account/$cld1/$cli1/$i_connection1/$cld2/$cli2/$i_connection2/$ts/";

// Signing the API key for better security

$sign = hash('sha256',$check_uri . $api_key);

// initiate the call from your script

makecall(); // call the function to start the call
