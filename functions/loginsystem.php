<?php


if (isset($_POST['loginbutton'])) {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";


    $conn = new mysqli($servername,$username,$password,$dbname);


    $inputname = $_POST['username2'];
    $inputpass = $_POST['password2']; // assign values of input to individual variables



    $sql = 'SELECT * FROM users WHERE uidUsers="Testingo" AND pwdUsers="CRYPTCODE"';

    $sql2 = str_replace("Testingo",$inputname,$sql);

    $sqlza = str_replace("CRYPTCODE",$inputpass,$sql2);








    // creating sesison
    
    // querying the sql statement




    $result = mysqli_query($conn,$sqlza);

    
    if (mysqli_num_rows($result) > 0) {



        while ($row = mysqli_fetch_assoc($result)) {


            echo "Found user";


            $_SESSION['name']  = $inputname;

            session_start();

            echo "Session started";

            
        }
    }


}




?>
