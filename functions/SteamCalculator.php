<?php

// utilises API interactivity

require '../require/checksteam.php';
?>


<html>

<body style="background-color:black;color:white;">

<head>
<body>

</body>

<link rel="stylesheet" type="text/css" href="/../stylesheet/replication.css">


<p> Get current level </p>

<form method="POST">
    <input type="text" name="steamuser" class="userstyle" placeholder="Enter username here">
<button class="button" type="submit" name="getcur">Get current level</button>
<input id="current" class="styling" placeholder="Cur" type="text" readonly name="current">

<input class="styling2" placeholder="Des" type="text" name="desired">
</form>


</head>
</html>

<?php



// used for calculations
// uses a stylesheet too
// require check





    // check

    if (isset($_POST['getcur'])) {

        $current  = $_POST['current'];
        $desired = $_POST['desired']; 
        $steamuser = $_POST['steamuser']; // get the name of user
        

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

// system complete :D
        }



    
