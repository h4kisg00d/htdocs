<?php

session_start();


//echo $_SESSION['id'];

echo "<br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = new mysqli($servername,$username,$password,$dbname);

// following code

//$sql = "SELECT u.uidUsers, b.Body, b.userId, b.id, b.BoardTitle FROM boards b inner join users u ON b.userId=u.id WHERE b.id=93 ";
$sql = "SELECT u.uidUsers, b.Body, b.userId, b.id, b.BoardTitle FROM boards b inner join users u ON b.userId=u.id  ";
$result = mysqli_query($conn,$sql);

echo mysqli_num_rows($result) . " posts created on this board";


echo "<br>";

echo "<br>";
if (mysqli_num_rows($result) > 0 ) {

    
    while ($row = mysqli_fetch_assoc($result)) {



        echo ' <div>

      
        <h1> '.$row['uidUsers'].'</h1>
        
        <a href="post.php?id='.$row['id'].'">' . $row['BoardTitle'] . '</a>
        
        
        
        
        </div>
        
        <style>
        
        div {
            width: 500px;
            height: -130px;
            border: 11px solid white;
            padding: 50px;
            margin: 10px;
            font-size:10px;
          }
        
          </style>
          

          <div class="olo">
          <p> '.$row['uidUsers'].'</p>
          </div>


          <style>

          .olo {

            position:relative;
            top:30px;

          }

          </style>


        
          
          ';
       


        
      


       
        



    }



}



?>