


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
    
    
    
    ';

    echo  ' 
    <form action="logout.php" method="POST">

<button type="submit" name="logout-submit">Logout</button>




</form>
    
    
    ';


$tem = file_get_contents('http://localhost:81/template.php');




    // creating a function which replaces the content

    
    $replaced = str_replace('userkeyhereok',$_SESSION['name'],$tem);

    // name the user depending on the name of the session created



// for each user, they have individual bios which can be modified.






echo $replaced;



// retrieve contents of said file

 }
?>