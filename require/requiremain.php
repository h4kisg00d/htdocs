<html>

<head>


    <link rel="stylesheet" href="stylesheet/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>



<body>


    <h1> GENERAL DISCUSSION </h1>


    <button class="button-design" onclick="createnew()">NEW DISCUSSION</button>

    <form method="POST" id="newPost">
        

        <p> Create a new post </p>


        <input class="board-name" type="text" name="board" placeholder="Enter board name...">
        <br>
        <textarea height="100" width="100" class="board-desc" type="text" name="body" placeholder="Enter content here.."></textarea>

        <button type="submit" name="submit">Create new post</button>

    </form>

    <h1> General discussion</h1>


    <p style="color:white;">Posts created</p>

</body>

</head>

</html>

<?php

require 'require.php';


$servername =  "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";
$conn = new mysqli($servername, $username, $password, $dbname);


if (isset($_POST['submit'])) {

    $userId = $_SESSION['id'];
    $boardname = $_POST['board'];
    $bleh = $_POST['body'];


    //$sql = "INSERT INTO boards (BoardTitle)
    //VALUES ('XD')";


    // $sql = "INSERT INTO boards (BoardTitle,Body,userId)
    //   VALUES ('" .$boardname . " ','" .$bleh . " ', )";

    $sql = "INSERT INTO boards (BoardTitle,Body,userId)
    VALUES ('" . $boardname . " ','" . $bleh . " ', " . $userId . ");";
    mysqli_query($conn,$sql);


    $sql = "SELECT * FROM boards where BoardTitle = '".$boardname."'Order by id desc limit 1;";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            echo $row['id'];
            echo '<script> document.location.href="post.php?id='.$row['id'].'"</script>;';
    // used for displaying the names of the posts created by users and the users who created them.
    
        }
        


        
        
        exit();
    } else {
       // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>

<script>
    $('#newPost').hide();

    function createnew() {
        $('#newPost').slideToggle(); // toggle slide animation
    }
</script>