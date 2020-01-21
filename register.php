<html>

 <head>

 <body>


 <form method="POST">

 <input type="text" name="username">

 <input type="password" name =  "password">


 <button type="submit" name="submit">Signup</button>



</form>


</body>


</head>




</html>


<?php

if (isset($_POST['submit'])) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";


$conn = new mysqli($servername,$username,$password,$dbname);


$ze = $_POST['username'];
$zep = $_POST['password'];


$sql = "INSERT INTO users (uidUsers,pwdUsers) VALUES('Change1','Change2')";

$sql9 =  str_replace("Change1",$ze,$sql);

$sql10 = str_replace("Change2",$zep,$sql9); // using string replace methods to replace parts of the sql before querying. So much of an easier way instead of using . as it just confuses people otherwise.

$result = mysqli_query($conn,$sql10);


$pl = "Successfully registered user H4k";

$plclone = str_replace("H4k",$ze,$pl);

echo $plclone; // String replacement methods once again, as it's more easier to use them :)

}

?>