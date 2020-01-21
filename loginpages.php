

<?php


require 'functions/loginsystem.php';



session_start(); // initiate a session

// be able to check whether or not the user is logged in or not


if (isset($_SESSION['name'])) {


    echo '<form method="POST">

    <p> Username <p>
    <input type="text" name="username2" placeholder="Enter username">
    
    <br>
    
    <p> Password</p>
    
    <br>
    
    <input type="password" name="password2" placeholder="Enter password">
    
    <button type="submit" name="loginbutton">Login</button>
    
    
    </form>
    ';


echo '


<form method="POST">


<h1> Signup </h1>

<p> Username </p>


<input value="text" type="text" name="username9">

<br>

<p> Password </p>

<input  type="password" name="password9">

<button type="submit" name="Signup">Signup</button>

</form>

';


// check whether or not the user is logged in, if so then display specific content.





    // check if the session has been altered in some way

} else {





}






?>
