
<?php

// INITATING THE CALL FUNCTION 

function Makecall() {

$handle=curl_init( $tcxc_host . $check_uri . $sign );
curl_setopt($handle, CURLOPT_VERBOSE, true);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
$content = curl_exec($handle);
echo $content;

}
