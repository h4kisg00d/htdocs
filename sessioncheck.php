<?php


$sessionstat = session_status();
echo $sessionstat;


if ( $sessionstat == 1 ) {


    

    session_start();
    
    

} else {



   


    echo "Test";
}


// require php file



?>


