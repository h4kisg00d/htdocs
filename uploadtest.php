<?php



session_start();  // starting session
$_SESSION['message'] = ''; // setting session variable and value
$mysqli = new mysqli("localhost", "root", "", "dbname"); // establishing connection to the database


if ($_SERVER["REQUEST_METHOD"] == "POST") { // utilising the $SERVER variable to check if a post method has been utilised
    print_r( $_FILES ); die(); // printing 
   
   
    $_FILES['avatar']['name']; 


    $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']); // specifying an avatar path
        
   
    if (preg_match("!image!",$_FILES['avatar']['type']))  {  // conditional statement which utilises the preg_match function to check whether or not the file is an image or not
        
       
        if (copy($_FILES['avatar']['tmp_name'], $avatar_path))  {  
        
        



    if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) { // renaming the file that was stored in the temp directory
{
 
    $_SESSION['username'] = $username;
    $_SESSION['avatar'] = $avatar_path;

  
    $sql = "INSERT INTO users (username, email, password, avatar) "
    . "VALUES ('$username', '$email', '$password', '$avatar_path')"; // inserting data into the database which witholds relevancy to the upload and the users credentials inputted.


}
    }
}
    }
}

    ?>