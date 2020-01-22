


<?php


session_start(); // start the session


if (isset($_SESSION['name'])) {



    // if the session "name" is not found then send the user back
    echo "Nope";
}
 else { 


$tem = file_get_contents('http://localhost/template.php');




    // creating a function which replaces the content

    
    $replaced = str_replace('userkeyhereok',$_SESSION['name'],$tem);

    // name the user depending on the name of the session created



// for each user, they have individual bios which can be modified.






echo $replaced;



// retrieve contents of said file

 }
?>