<?php error_reporting(0);  // disable error reporting to avoid users seeing errors?>

<?php

// utilises API interactivity

require '../require/checksteam.php';
?>


<html>

<body style="background-color:black;color:white;">

<head>

<h1> Steam Level Calculator </h1>
<body>

</body>

<link rel="stylesheet" type="text/css" href="/../stylesheet/replication.css">


<p> This calculator is utilised for calculating XP requirements, set requirements to get to a desired level from your current and to estimate price of desired levels you want to get to. In order to load your current level, be sure that you input a valid Steam community id into the steam community id input box and it will be loaded here, upon navigating to this page. </p>

<form method="POST">
    <input type="text" name="steamuser" class="userstyle" title="Steam username" readonly>
<button class="button" type="submit" name="getcur">Get current level</button>
<input id="current" class="styling" title="Current level" type="text" readonly name="current">

<input class="styling2" title="Desired level" type="text" name="desired">
</form>


</head>
</html>

<?php
session_start(); // start a session
$getmy =  $_SESSION['name']; // store the username of the user within a variable called getmy
// upon loading the page, it will check whether or not the level has been changed by checking the current level


$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname); // establish connection to the database

$sql = 'SELECT * FROM users WHERE uidUsers="'.$getmy.'"'; // checking the username;


$result = mysqli_query($conn,$sql); // query the database

if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {  // storing the results into an array
$user =  $row['steamuser']; // obtain the steam user




}
}

echo 'You have registered with the  Steam community id called "'.$user.' ". Click "get current level" to load your current Steam level.';
echo '<br>';
echo 'Make sure to input a valid desired Steam level into the next input box on the right beside your current. Any non-numerical values or special characters will automatically be converted into integers.';


?>


<?php

// this is used for checking whether or not the current user is authenticated and performing checks

// if the user did not specify a username, their level will not be dispalyed here




$getmy =  $_SESSION['name']; // echo out the id of the user

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = new mysqli($servername,$username,$password,$dbname); // establish connection to the database

$sql = 'SELECT * FROM users WHERE uidUsers="'.$getmy.'"';

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0 ) {
while ($row=  mysqli_fetch_assoc($result)) {

    $user =  $row['steamuser']; // obtain the steam user
    $GLOBALS['steamusername'] = $user; // store the users steamuser into a global variable which is accessible outside of the local scope. 
}
}

?>


<?php

    // check whether or not the user has input a username!

    if (isset($_POST['getcur'])) {
     
        

        $current  = $_POST['current'];
        $desired = $_POST['desired']; 
        $steamuser = $_POST['steamuser']; // get the name of user
        
        preg_replace('/\D/', '', $desired); // using the preg replace function to remove non-numeric values, incase someone changes the value.
        preg_replace('/\D/', '', $current); // using the preg replace function to remove non-numeric values in the current, incase someone changes the value.
        preg_replace('/[^a-zA-Z0-9\']/', '_',$steamuser); // preg replace

        // all of the above is used to validate any input. This prevents the use of malicious exploits that could be utilised to interact with the database in a malicious way

        $url = 'https://stc-price.appspot.com/UserInfo?id='.$GLOBALS['steamusername'].'';
        
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
        
        $retrieved_level = $testJson["level"];  // store the retrieved level into a variable

        echo '<script> document.getElementById("current").value = "'.$retrieved_level.'" </script>';


        // interact with another API


         $url = 'https://stc-price.appspot.com/UserInfo?id='.$steamuser.'';
        
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
        
        $retrieved_level = $testJson["level"];  // store the retrieved level into a variable


// stor

// calculate :)



        $url = 'https://steamlevelcalculator.com/ajax_card_calc.php';
        
        $data = 'level='.$current.'&desired_level='.$desired.'&card_amount=11&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05&cards%5B%5D=0.05';


        
        $additional_headers = array(                                                                          
           'Host: steamlevelcalculator.com',
           'X-Requested-With: XMLHttpRequest',
           'Content-Type: application/x-www-form-urlencoded; charset=UTF-8'
           
        );
        
        $ch = curl_init($url);                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers); 
        
        $server_output = curl_exec ($ch);
        
        //echo  $server_output;
        echo"<br><br>";
        
        $testJson = json_decode($server_output,true);
        
        echo"<br><br>";
        
        $index = 0;
        $innerIndex = 0;
        
        $retrieved_xp= $testJson["xp_to_obtain"];  // store the retrieved level into a variable
        $total_price = $testJson["total_amount"]; // store the total amount into a variable
        $badgesets = $testJson["badge_upgrades_to_xp_needed"]; // store the number of required sets

    $xpretrieved =  $retrieved_xp;
    $totalretrieved = $total_price;
    

    $totalretrievedformat=  number_format($totalretrieved);

    echo 'You will require!';

    echo '<br>';

echo '

<div class="container">

<input id="calculated" style="width:340px;height:50px; border:solid white; padding:left; font-size:30px; background-color:black; color:white;" type="text" name="calculatedxp" readonly placeholder="          XP" </input>

</div>



';

echo ' <script> document.getElementById("calculated").value = "'.$retrieved_xp.'         XP"</script>';

echo '<h1 style="color:white;"' . '>AT A ROUGH COST OF<' . '/h1>';

echo '<input id="calculatedcost" style="width:340px;height:50px; border:solid white; padding:left; font-size:30px; background-color:black; color:white;" readonly type="text" name="calculatedxp" placeholder="$" </input>';
echo ' <script> document.getElementById("calculatedcost").value = "$'.$totalretrievedformat.'"</script>';
echo '<br>';
echo '<input id="badgecalc" style="width:340px;height:50px; border:solid white; padding:left; font-size:30px; background-color:black; color:white;" readonly type="text" name="calculatedxp" placeholder="" </input>';
echo ' <script> document.getElementById("badgecalc").value = "'.$badgesets.'         sets required"</script>';

// system complete :D
        }
    
