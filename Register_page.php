
<html>


<head>




<body>



<br>

<form method="POST">

<p> Username <p>
<input type="text" name="username" placeholder="Enter username">

<br>

<p> Password</p>

<br>

<input type="password" name="password" placeholder="Enter password">

<button type="submit" name="submit">Submit</button>


</form>



<?php

require 'functions/check.php'; // requiring the file


if (isset($_POST['username'])) {

   
$output = createuser($_POST['username'],$_POST['password']);
   
}





?>



</body>





</head>




</html>

