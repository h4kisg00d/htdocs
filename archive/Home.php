




<?php




$servername = "localhost";
$username = "root";
$password="";
$dbname=  "users";


$conn = new mysqli($servername,$username,$password,$dbname);


$sql = "INSERT INTO user(users,email,number,test)   VALUES('XD','XD',1,'pap');";



mysqli_query($conn,$sql);


$sqlo = "SELECT * FROM user";

$result = $conn->query($sqlo);




if ($result-> num_rows > 0) {

    while($row = $result->fetch_assoc()) {


        echo "id:" . $row["users"];

        

    }



}

$sql = "DELETE FROM user";

mysqli_query($conn,$sql);



$sqlo = "SELECT * FROM user";

$result = $conn->query($sqlo);


if ($result-> num_rows > 0) {

    while($row = $result->fetch_assoc()) {


        echo "id:" . $row["users"];

        

    }



}

echo " end";







?>