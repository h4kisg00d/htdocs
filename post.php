
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
        echo "<h1>" . $row['BoardTitle'] . "</h1>";

        echo "<p>" . $row['Body'] . "</p>";


        echo ' 
        
        <form method="POST">


        <button type="submit" name="reply">Reply</button>



        <p> Response </p>

        <br>
        <input type="text" name="response" placeholder="Enter reply here">

        

<h1>XD</h1>
        </form>
        
        ';


        if (isset($_POST['reply'])) {

            $posted = $_POST['response'];
            


         
session_start();


            $pol = $_SESSION['id'];


$sql = '

INSERT INTO posts (`Content`,`userId`) VALUES ("'.$posted.'",'.$pol.')



';




$testa = $_GET['id'];


$pel = mysqli_query($conn,$sql);



header("Location: http://localhost:81/post.php?id=".$testa." ");





        }
    }
}



require 'loadposts.php';

require 'loadpost2.php';





?>