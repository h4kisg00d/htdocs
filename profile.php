


<?php


session_start(); // start the session


if (!isset($_SESSION['name'])) {



    // if the session "name" is not found then send the user back
    echo "Nope";
}
 else { 



    echo '
    
    <ul>
    <li><a href="loginpages.php">My profile</a></li>
    <li><a href="http://localhost:81/functions/SteamCalculator.php">Level Calculator</a></li>
    <li><a href="eee">Edit profile</a></li>
    <li><a href="eeee">Forum</a></li>
  </ul>


  <style>

  ul {
    
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
      }
      
      li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
      }
      
      /* Change the link color on hover */
      li a:hover {
        background-color: #555;
        color: white;
      
  }

  </style>
    
    
    
   


  <form action="uploadtest.php" method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit-upload">
</form>


    <form action="logout.php" method="POST">

<button type="submit" name="logout-submit">Logout</button>




</form>
<button name="edit" id="edit"  onclick="show()" class="edit">Edit profile</button>



<script>


function show() {

    

    var ja = document.getElementById("main1").style.display;
    var ja2 = document.getElementById("main2").style.display;
    var ja3 = document.getElementById("edit").innerHTML;
  

    if ( ja == ""  && ja2 == "" && ja3 == "Edit profile") {
        document.getElementById("main1").style.display = "block";
    document.getElementById("main2").style.display = "block";
    document.getElementById("edit").innerHTML = "Close edit";

    }

    else if ( ja == "block" && ja2 =="block"  )  {

        document.getElementById("main1").style.display = "";
        document.getElementById("main2").style.display = "";

        document.getElementById("edit").innerHTML = "Edit profile";

    }


}


</script>











<style>


.edit {


    background-color:black;
    color:red;


}

</style>





<form method="POST">

<textarea id="main1" class="main1" name="biocontent"></textarea>


<button id="main2" class="main2" type="submit" id="submit"  name="submit-profile">Submit profile changes</button>



<style>


 .main1 {

    display:none;
 }

 .main2 {

    display:none;
 }



</style>

</form>








    
    
    ';

    require 'uploadtest.php';
require 'changebio.php';

  
error_reporting(E_ALL);
ini_set('display_errors', 1);


$link = mysqli_connect("localhost", "root", "", "loginsystem");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



$myusername2 = $_SESSION['name'];




$stmt = mysqli_stmt_init($link);

if (mysqli_stmt_prepare($stmt, 'SELECT uidUsers, pwdUsers,Bio FROM users WHERE uidUsers=?')) {


    mysqli_stmt_bind_param($stmt, "s", $myusername2);


    mysqli_stmt_execute($stmt);

    
   
    mysqli_stmt_bind_result($stmt,$username9,$passwordUser,$bio);

   
   

    while (mysqli_stmt_fetch($stmt)){
    echo $username9 . " ";
    echo $passwordUser;
    echo "<br>";
   
}


  

    

    


   
    
    // working
    mysqli_stmt_close($stmt);



    
    


}








$tem = file_get_contents('http://localhost:81/template.php');




    // creating a function which replaces the content

    
    $replaced = str_replace('userkeyhereok',$_SESSION['name'],$tem);

    // name the user depending on the name of the session created



// for each user, they have individual bios which can be modified.






//$replaced2 = str_replace('Bioherekey',)


// retrieve contents of said file


$replace2 = str_replace('Bioherekey',"<p>" . $bio . "</p>",$replaced);


echo $replace2;

 }
?>



