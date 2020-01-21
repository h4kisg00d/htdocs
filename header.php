<html>

<head>


<title></title>


</head>

<?php

session_start();

?>



<body>

<head>

<nav>

<a href="">

</a>

<ul>

<li><a href="index.php">Home</a></li>
<li><a href="">Portfolio</a></li>
<li><a href="">About me</a></li>
<li><a href="">Contact</a></li>


</ul>

<div>


<?php
if (isset($_SESSION['userId'])) {

    echo '<a href="signup.php">Signup</a>


    <form action="includes/logout.inc.php" method="post">
    
    <button type="submit" name="logout-submit">Logout</button>';

}

else {

    echo '<form action="includes/login.inc.php" method="post">

    <input type="text" name="mailuid" placeholder="Enter your username">
    <input type="password" name="pwd" placeholder="Enter your password">
    <button type="submit" name="login-submit">Login</button>
    
    
    </form>
    
    
    
    
    </form>';

}
?>







</div>

</nav>

</header>