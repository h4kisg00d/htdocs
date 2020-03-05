




<?php

require 'level-forum.php'; // other PHP file exists that deals with the levels

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname);


// establishing connection to the database



$too = $_GET['id']; // get the id


$sql = " SELECT u.uidUsers, u.Level, p.Content, p.PostCount, p.userId, p.id FROM posts p inner join users u ON p.userId=u.id WHERE p.BoardId=".$too." ";


$result = mysqli_query($conn,$sql);

if ( mysqli_num_rows($result) > 0) {


    while ($row=  mysqli_fetch_assoc($result)) {

echo '
<div class="reply-container">
<div>
<h1 class="username"> '.$row['uidUsers'].'</h1>






<p> Users level is</p>


<span><h1 class="level-forum"> '.$row['Level'].'</h1></span>

</div>



 <div>

  <p class="reply-content"> '.$row['Content'].'</p>

</div>
  </div>








';
      
       // echo $rowyes['uidUsers'];
        //echo "<br>";
    }


}// first function

?>