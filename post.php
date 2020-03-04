
<html>


<head>



<link rel="stylesheet"  href="stylesheet/style.css">


</head>




</html>


<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname);

$test = $_GET['id'];

$sql = 'SELECT * FROM boards WHERE id=' . $test . '';


// used for making the posts


$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {



        echo "<h1>  </h1>";
 

        echo '
        
      

        <h1 class="title" style="font-size:90px;"> '.$row['BoardTitle'].' </h1>

        <p class="body" style="font-size:50px;">'.$row['Body'].'</p>

        

        <style>

        .bigg {
        font-size:30px;

        }


        </style>

        
        
        
        ';




        echo ' 
        

        
        ';


        if (isset($_POST['reply'])) {

            $posted = $_POST['response'];
            


         
session_start();


            $pol = $_SESSION['id'];

            $board = $_GET['id'];


$sql = '

INSERT INTO posts (`Content`,`userId`,`BoardId`) VALUES ("'.$posted.'",'.$pol.', '.$board.')



';




$testa = $_GET['id'];


$pel = mysqli_query($conn,$sql);



header("Location: http://localhost:81/post.php?id=".$testa." ");





        }
    }
}


require 'loadpost2.php';



echo '        <form method="POST">

<textarea class="response-box" type="text" name="response" placeholder="Enter reply here"></textarea>

<button  class="button-reply" type="submit" name="reply">Reply</button>












</form>';

?>