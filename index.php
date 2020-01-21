<?php

require "header.php";

require 'dbh.php'



?>


<main>

<?php

if (isset($_SESSION['userId'])) {

    echo '<p>You are logged in!</p>';

}

else {

    echo '<p> You are logged out</p>';

}

?>



<?php

$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $id = $row['id'];

        $sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";

        $resultImg = mysqli_query($conn,$sqlImg);
        while ($rowImg = mysqli_fetch_assoc($resultImg)) {
echo "<div>";

if ($rowImg['status'] == 0) {

    echo "<img src='uploads/profile".$id.".png'>";
} else {

    echo "<img src='uploads/profiledefault.png'>";
}

echo $row['username'];

echo "</div>";

        }

    }
} else {

    echo "No users found in the database";
}



if (isset($_SESSION['userId'])) {

    echo '<form action="upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="file">
    
    <button type="submit" name="submit">Upload file</button>
    
    </form>';
   

    
}

?>

</main>



<?php
require "footer.php";

?>


