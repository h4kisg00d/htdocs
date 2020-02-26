<html>

<head>


<body>





<form method="POST">



<p> Board name </p>


<br>






<input type="text" name="board" placeholder="Enter board name...">
<input type="text" name="body" placeholder="Enter content here..">


<br>
<button type="submit" name="submit">Create new board</button>




</form>

<h1> General discussion</h1>


<p style="color:blue;">Posts created</p>

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


    $boardname = $_POST['board'];
$bleh = $_POST['body'];


    //$sql = "INSERT INTO boards (BoardTitle)
    //VALUES ('XD')";

    
    $sql = "INSERT INTO boards (BoardTitle,Body)
    VALUES ('" .$boardname . " ','" .$bleh . " ')";


   if (mysqli_query($conn, $sql)) {
    
    header("Location: forum.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}


?>
