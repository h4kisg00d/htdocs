

<?php


require 'database.php';





str_replace("XD",$lo,$sql);

userExists('test');
userExists('test2');

function userExists($pname) {
    $userhere = $_POST['username'];
    $passhere = $_POST['password'];

    $sql = "SELECT * FROM usersxd WHERE uidUsers= ".$userhere;

    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            if ($userhere)

            
        }
    }

}

?>