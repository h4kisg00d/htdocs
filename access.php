<?php


$servername= "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "SELECT * FROM posts WHERE userId=l"

$resultt = mysqli_query($conn,$sql);



?>
