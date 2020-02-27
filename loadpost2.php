




<?php







   
   
    

   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname);


// establishing connection to the database



$too = $_GET['id']; // get the id


$sql = " SELECT u.uidUsers, p.Content, p.PostCount, p.userId, p.id FROM posts p inner join users u ON p.userId=u.id WHERE p.BoardId=".$too." ";



$result = mysqli_query($conn,$sql);



if ( mysqli_num_rows($result) > 0) {


    while ($row=  mysqli_fetch_assoc($result)) {

echo '
<div>


<h1> '.$row['uidUsers'].'</h1>






</div>

<style>

div {
    width: 100px;
    height: -180px;
    border: 11px solid white;
    padding: 50px;
    margin: 50px;
    font-size:15px;
  }

  </style>


  <div class="yes">

  <p> '.$row['Content'].'</p>


  </div>

  <style>

.yes {
    width: 900px;
    height: 180px;
    border: 11px solid white;
    padding: 50px;
    margin: 50px;
    font-size:30px;
    left:400px;
    top: -190px;
    position:relative;
  }

  </style>







';
      
     

       // echo $rowyes['uidUsers'];
        //echo "<br>";
    }


}// first function









?>