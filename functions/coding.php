








<?php

/*
$url = 'https://discordapp.com/api/v6/channels/686897913745768461/messages';

$data = '
{
    "content":"0"
}
';

$additional_headers = array(                                                                          
   'Host: discordapp.com',
   'Authorization: Njg2ODk3ODA2OTAwMDY4Mzgz.Xmd5dQ.sRCMrY_Cbrui7hwJWJcyaUU5dpQ',
   'Content-Type: application/json',
   'Origin: https://discordapp.com'
);

$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

$server_output = curl_exec ($ch);

echo  $server_output;
echo"<br><br>";

$testJson = json_decode($server_output,true);

echo $testJson["channel_id"];


*/

use function PHPSTORM_META\type;

$url = 'https://stc-price.appspot.com/UserInfo?id=H4kX';

$data = '
{
    "content":"0"
}
';

$additional_headers = array(                                                                          
   'Host: stc-price.appspot.com'
);

$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

$server_output = curl_exec ($ch);

//echo  $server_output;
echo"<br><br>";

$testJson = json_decode($server_output,true);

echo"<br><br>";

$index = 0;
$innerIndex = 0;

echo $testJson["level"];


?>