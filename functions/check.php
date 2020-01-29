

<?php



function createuser($loginname,$newpassword) {


    // creating the function itself

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";

    $conn = new mysqli($servername,$username,$password,$dbname);



    $sql3 = "SELECT * FROM users WHERE uidUsers='".$loginname."'";

    $result = mysqli_query($conn,$sql3);


    if (mysqli_num_rows($result) > 0) {


        echo "NOPE! :)";



    } else {


    $sql1 = "INSERT INTO users (uidUsers,pwdUsers,Bio)
    VALUES ('".$loginname."','".$newpassword."','');"; // SQL statement to be executed


// adding bio
    $result = mysqli_query($conn,$sql1);


    echo "test";

    }


}



function checkuserexists() {

    $servername = "localhost";




}
function loginuser($loginname,$loginpassword) {


    $servername = "locahost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";
    $conn= new mysqli($servername,$username,$password,$dbname);

    
    $o = "?,?,?";

    $sql = "SELECT * FROM users WHERE uidUsers='nametochange'";

    $le = str_replace("nametochange",$loginname,$sql);


    $result = mysqli_query($le);





    // function for checking if the user is in the database or not
}









?>
