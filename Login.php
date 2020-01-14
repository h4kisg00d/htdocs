



<html>


<head>
<body>



<h1 id="hello" class="hello">Login system test</h1>


<form  method="POST">


<p style="position:relative;color:red;font-size:30px;">Username</p>

<input name = "usrname" type="text" placeholder="Enter username here" >





</input>


<br>

<p style="position:relative;color:red;font-size:30px;">Email</p>

<input  name="email" placeholder="Enter email here">


<input name="number" type="text">

<button name="submit" type="submit" id="submit" class="submit">Submit</button>




</form>




<?php

//

if (isset($_POST['submit'])) { 


    echo "test";




// assigning values to the different variables


$servername = "localhost"; 

$username = "root";

$password = "";

$dbname = "users";



$conn = new mysqli($servername,$username,$password,$dbname); 



// inserting data into the database


$usrname = $_POST['usrname'];

$email = $_POST['email'];

$number = $_POST['number'];

echo "<br>" . $usrname;


echo $email;

$sql = "INSERT INTO user(users,email, number, test) VALUES ($usrname,$email,$number,'test');";



mysqli_query($conn,$sql);


}
?>



</head>
</body>




</html>