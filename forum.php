<html>



<link rel="stylesheet"  href="stylesheet/style.css">


<head>


<body>






<h1> GENERAL DISCUSSION </h1>







<form method="POST">



<p> Create a new post </p>


<br>






<input type="text" name="board" placeholder="Enter board name...">
<input type="text" name="body" placeholder="Enter content here..">


<br>
<button type="submit" name="submit">Create new post</button>




</form>

<h1> General discussion</h1>


<p style="color:white;">Posts created</p>

</body>



</head>




</html>



<?php

require 'require.php';


$servername=  "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = new mysqli($servername,$username,$password,$dbname);


if (isset($_POST['submit'])) {




    $userId = $_SESSION['id'];
    $boardname = $_POST['board'];
$bleh = $_POST['body'];


    //$sql = "INSERT INTO boards (BoardTitle)
    //VALUES ('XD')";

    
   // $sql = "INSERT INTO boards (BoardTitle,Body,userId)
 //   VALUES ('" .$boardname . " ','" .$bleh . " ', )";



 $sql = "INSERT INTO boards (BoardTitle,Body,userId)
    VALUES ('" .$boardname . " ','" .$bleh . " ', ".$userId.")";

   if (mysqli_query($conn, $sql)) {
    
    header("Location: forum.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}


?>
