<?php

require 'dbh.php'; // require connection to the database


// connection established to the database so variable $conn can be accessed

$too = $_GET['id']; // get the id

$sql2 = " SELECT u.uidUsers, u.Level, p.Content, p.PostCount, p.userId, p.id FROM posts p inner join users u ON p.userId=u.id WHERE p.BoardId=".$too." ";


$result = mysqli_query($conn,$sql2);



if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {


//https://stackoverflow.com/questions/44151874/how-to-iterate-over-json-object-in-python-containing-dictionary-and-list





    }
}



?>

<html>

<head>

<body>


<link rel="stylesheet" type="text/css" href="http://localhost:81/stylesheet/Level.css">


</body>

</head>

</html>

<?php









// stylesheet also linked



?>

