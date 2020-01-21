


<?php

include_once 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


echo $uid;

$sql = "INSERT INTO user (username,password)
VALUES ('$uid','$pwd')";
mysqli_query($conn,$sql);

$sql = "SELECT * FROM user WHERE username='$uid'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

while ($row = mysqli_fetch_assoc($result)) {

    $userid = $row['id'];

    $sql = "INSERT INTO profileimg (userid,status)
    VALUES ('$userid',1)";
    mysqli_query($conn,$sql);
    


}





} else {

    echo "You have an error";
}