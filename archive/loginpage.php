



<?php


session_start();


?>

<html>

<head>


<body>


<p> Username:</p>


<br>

<form method="POST">

<input type="text" name="username" placeholder="Enter username">

<br>

<p>Password</p>

<input type="password" name="password" placeholder="Enter password">

<br>

<button type="submit" name="submit">Login</button>

</form>

<form action="logout.php" method="POST">
    



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


$sql = "SELECT * FROM users";


$username1 = $_POST['username'];
$password1 = $_POST['password'];

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        

       if ($row['uidUsers'] == $username1 && $row['pwdUsers'] == $password1) {


        echo "Successfully logged in!";

        $_SESSION["name"] = $username1;




       

        

       }


    }


    
}
}


?>
