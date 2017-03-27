<?php
// INCLUDE THIS FILE IN YOUR MAKECALL.PHP SCRIPT TO BE ABLE TO USE CARRIER NAMES VARIABLES INSTEAD OF HAVING TO REMEMBER OR RETREIVE i
// THE I_CONNECTION ID FOR EACH CARRIER 

// CARRIER NAME VARIABLES | No need to memorize i_connection ids for each seller/route, 
//The carrier.php is designed to make it easier for dveeloper to use carrier name variables instead of I_Connection IDs

$TATA = 220; // ROUTES THE CALL TO TATA COMMUNICATIONS PRIME DIVISION
$VIBER = 189; // ROUTES THE CALL TO VIBER ONNET NETWORK , PHONE NUMBER MUST BE ONLINE WITH VIBER APP TO RECEIVE THE CALL.
$IBASIS = 241; // ROUTES THE CALL VIA IBASIS PRIME NETWORK
$GREENWIRE_INDIA_CLI = 286; // Routes the call to seller GreenWire, Route INDIA CLI Division
$Vinulum_Stanard = 610;  // Routes the call to Vinculum Communications, Standard Division
$Vinculum_Premium = 611; // Routes the call to Vinculum Communications, Premium Division
$IDT_Premium = 315; // Routes the call to IDT Express Platinum Division (Highest Call Quality & Price)
$IDT_Gold= 314; // Routes the call to IDT Express Platinum Division (Mixed Call Quality & Lower Price)
$IDT_Instant=313; // Routes the call to IDT Express Platinum Division (CallQuality Not Guranteed & Lowest Price possible)


// feel free to add your own sellers and connections , you can get seller i_connection from tcxc portal  
