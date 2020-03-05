<?php

// starting the session

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername, $username, $password, $dbname);


//$sql = "SELECT * FROM posts
//inner join users on posts.userId=users.id
//WHERE posts.id=1";


$usernamehere = $_SESSION['name'];


$sql = "SELECT * FROM posts";











$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {



   
    }
}




?>
