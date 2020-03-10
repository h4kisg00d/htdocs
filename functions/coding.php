








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

$url = 'https://discordapp.com/api/v6/channels/686897913745768461/messages?limit=50';

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
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

$server_output = curl_exec ($ch);

echo  $server_output;
echo"<br><br>";

$testJson = json_decode($server_output,true);

echo"<br><br>";

$index = 0;
$innerIndex = 0;
foreach ($testJson as $item){
    foreach ($item as $key => $value){
        
        if(is_array($value)){
            foreach ($value as $innerKey => $innerValue){                
                echo $innerKey . " =>" . $innerValue . "<br>";

            }
        }
        else{            
            echo $key . " =>" . $value . "<br>";

            if ($key == "content" && $value == "hahahaha" ) {
                echo"<br><br>";
                echo $index;
                echo"<br><br>";
            }
        }
        $innerIndex = $innerIndex +1;
    }
        echo"<br><br>";
        $index = $index +1;


}

echo $testJson[0]["channel_id"];


?>