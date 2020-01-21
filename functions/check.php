

<?php



function createuser($loginname,$newpassword) {


    // creating the function itself

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";

    $conn = new mysqli($servername,$username,$password,$dbname);

    $sql = "INSERT INTO users (uidUsers,pwdUsers)
    VALUES ('".$loginname."','".$newpassword."');"; // SQL statement to be executed

    $result = mysqli_query($conn,$sql);


}





?>
