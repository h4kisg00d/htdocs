

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


function loginuser($loginname,$loginpassword) {


    $servername = "locahost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";
    $conn= new mysqli($servername,$username,$password,$dbname);

    
    $o = "?,?,?"

    $sql = "SELECT * FROM users WHERE uidUsers='nametochange'";

    $le = str_replace("nametochange",$loginname,$sql);


    $result = mysqli_query($le);





    // function for checking if the user is in the database or not
}









?>
