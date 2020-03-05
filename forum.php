<?php
// code below is used for testing whether or not the user is currently authenticated or not
session_start();

if (!isset($_SESSION['id'])) {

    echo "Sorry but you must be logged in to view this content";   // authentication test for the forum
    echo '<p> Please use the login system to ensure that you are logged in to our system.  ';
    echo '<br>';
    echo '<img src="images/unnamed.jpg" width="150" height="100">';
    // if the user is not already authenticated then they see an error message displayed that informs them of this.
} else {
    require 'require/requiremain.php'; // requiremain is a PHP file which is used to  executed all the PHP code responsible for the forum page, such as displaying the boards,
    // the names of the users who created them, etc.
    

}

?>

