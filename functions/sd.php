







<html>

<head>

<body>

<form method="POST">

<input name="username" type="text">
<button type="submit" name="submit">Get JSON info</button>

</form>

</body>


</head>


</html>



<?php
// this a simple API interactivity test which interacts with the roblox API to get usernames
if (isset($_POST['submit'])) {

    $usernamehere = $_POST['username'];
$url = 'https://api.roblox.com/users/get-by-username?username='.$usernamehere.'';

$data = '
{
  "url": "https://my.server.com/new-callback",
  "signaturePassword": "g394g732vhsdfiv34",
  "test": true
}
';

// basic API interactivity test
// the data is the data that the server may send, usually in the event that a post request is established

$additional_headers = array(                                                                          
   'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9   ',

   // specifying headers
);

// send a simple http get request, vouch

$ch = curl_init($url);                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 

$server_output = curl_exec ($ch);

$respone = json_decode($server_output);

var_dump($respone,true);

echo "<br>";
echo $respone->Username;


$multipleObjectTest = 
'[{
    "id": "686902205982441502",
    "type": 0,
    "content": "3",
    "channel_id": "686897913745768461",
    "author": {
        "id": "686897806900068383",
        "username": "testingfore",
        "avatar": null,
        "discriminator": "3533"
    },
    "attachments": []
},{
    "id": "686902205982441502",
    "type": 0,
    "content": "3",
    "channel_id": "686897913745768461",
    "author": {
        "id": "686897806900068383",
        "username": "testingforefhgfhfghftghftt",
        "avatar": null,
        "discriminator": "3533"
    },
    "attachments": []
}]';


$objectTest = json_decode($multipleObjectTest, true);

//echo $multipleObjectTest;

echo $objectTest[1]["author"]["username"];


//foreach($objectTest as $obj) {
   /* foreach($objectTest as $key => $value) {
        echo $key . " => " . $value . "<br>";
      }
      echo "<br>";*/
//}


/*
// attempts to retrieve data
ob_start();

$test = ob_get_clean();

echo $test;

echo $test->Username;*/

}