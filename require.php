<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = new mysqli($servername,$username,$password,$dbname);



$sql = "SELECT * FROM boards ";

$result = mysqli_query($conn,$sql);

echo mysqli_num_rows($result) . " posts created on this board";


echo "<br>";

echo "<br>";
if (mysqli_num_rows($result) > 0 ) {

    
    while ($row = mysqli_fetch_assoc($result)) {



        
       


        

echo '<a href="post.php?id='.$row['id'].'">' . $row['BoardTitle'] . '</a>';
       
        
echo "<br>";


    }



}



?>