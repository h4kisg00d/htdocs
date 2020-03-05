<?php

//echo $_SESSION['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = new mysqli($servername,$username,$password,$dbname);
// database connection with parameters
// following code

//$sql = "SELECT u.uidUsers, b.Body, b.userId, b.id, b.BoardTitle FROM boards b inner join users u ON b.userId=u.id WHERE b.id=93 ";
$sql = "SELECT u.uidUsers, b.Body, b.userId, b.id, b.BoardTitle FROM boards b inner join users u ON b.userId=u.id  ";
$result = mysqli_query($conn,$sql);

echo mysqli_num_rows($result) . " posts created on this board";



if (mysqli_num_rows($result) > 0 ) {

    echo '<div class="post-list">'; // div class for styling purpose
    while ($row = mysqli_fetch_assoc($result)) {

        echo ' 
  
        <div class="posts">
        
        <h1> <a class="forum-name" href="post.php?id='.$row['id'].'">' . $row['BoardTitle'] . ' </h1> </a>
        
        <h2 class="forum-username"> '.$row['uidUsers'].'</h2> </div>  
          
          ';
// used for displaying the names of the posts created by users and the users who created them.

    }



}

echo '</div>';
?>