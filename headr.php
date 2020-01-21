




<html>

<head>

<body>





</form>



</body>



</head>




</html>


<?php


require 'database.php'; // require the database connection, so that you can access the variable



// now create the login


// check if the submit button has been pressed



if (isset($_POST['submit'])) {

    require 'blob.php';

if (isset($_SESSION['name'])) {

    echo '

    <form method="POST">

<p> Username </p>
<br>
    <input type="text" name="username">

    <p> Password</p>

    <input type="password" name="password">


    <button type="submit" name="submit">Login</button>

    </form>
    
    
    
    
    ';

} else {

 
}

}






?>
