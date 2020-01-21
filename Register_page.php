
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


if (isset($_POST['username'])) {


    require 'nameoffile'; // requiring the file
}



?>



</body>





</head>




</html>

