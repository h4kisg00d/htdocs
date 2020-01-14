
<?php

if ( isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';


    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username)  || empty ($email) || empty ($password) || empty ($passwordRepeat)) {


        header("Location: ../signup.php?error=emptyfields&uid=". $username . "&mail=" . $email);

        exit();
}

else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$S/", $username  )) {
    header("Location: ../signup.php?error=invalidmail&uid=");

    exit();


}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    header("Location: ../signup.php?error=invalidmail&uid=". $username);

    exit();


   }


   else if (!preg_match("/^[a-zA-Z0-9]*$S/", $username)) {

    header("Location: ../signup.php?error=invalidmail&mail=". $email);

    exit();
   }

   else if ($password !== $passwordRepeat) {

    header("Location: ../signup.php?error=passwordcheck&uid=". $username . "&mail=". $email);

    exit();

   }

   else {
       $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
       $stmt = mysqli_stmt_init();
   }
}