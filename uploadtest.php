<?php




$_SESSION['message'] = ''; // setting session variable and value
$mysqli = new mysqli("localhost", "root", "", "loginsystem"); // establishing connection to the database


if ($_SERVER["REQUEST_METHOD"] == "POST") { // utilising the $SERVER variable to check if a post method has been utilised

   
   
    $_FILES['avatar']['name']; 


    $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']); // specifying an avatar path
        
   
    if (preg_match("!image!",$_FILES['avatar']['type']))  {  // conditional statement which utilises the preg_match function to check whether or not the file is an image or not
        
       


        if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) { // renaming the file that was stored in the temp directory

    $username = "000";
    $password = "whateverthehell";
            $_SESSION['username'] = $username;
            $_SESSION['avatar'] = $avatar_path;
            

        
            $sql = "UPDATE `users` SET  `avatar` = '". $avatar_path . "' WHERE id=16";


            echo $sql;

            if ($mysqli->query($sql) === true)
            {
                $_SESSION[ 'message' ] = "Registration succesful! Added $username to the database!";

                //redirect the user to welcome.php
                //header( "location: welcome.php" );
            }
        }
    }
}
   

    ?>