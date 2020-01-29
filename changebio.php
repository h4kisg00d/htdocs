<?php




if (isset($_POST['submit-profile'])) {



    $servername1 = "localhost";
    $username1 = "root";
    $password1 = "";
    $dbname1 = "loginsystem";

    $conn1 = new mysqli($servername1,$username1,$password1,$dbname1);


    $myusername = $_SESSION['name'];

  
    
    $udp = $myusername;

    $biovalue = $_POST['biocontent'];

   

    $sql = "UPDATE `users` SET   Bio='LOLWHATISTHIS' WHERE uidUsers='USERNAMA' "; // update the bio value in the database


    $sql2=  str_replace("USERNAMA",$udp,$sql);

    $sql13 = str_replace("LOLWHATISTHIS",$biovalue,$sql2);

    mysqli_query($conn1,$sql13);
}

?>