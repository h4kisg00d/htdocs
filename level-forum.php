

<?php


require 'levels.php';

require 'dbh.php'; // require connection to the database


// connection established to the database so variable $conn can be accessed

$too = $_GET['id']; // get the id

$sql2 = " SELECT u.uidUsers, u.Level, p.Content, p.PostCount, p.userId, p.id FROM posts p inner join users u ON p.userId=u.id WHERE p.BoardId=".$too." ";


$result = mysqli_query($conn,$sql2);



if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {

//$mainlevel = 135;
//https://stackoverflow.com/questions/44151874/how-to-iterate-over-json-object-in-python-containing-dictionary-and-list


//$levelhund = substr($mainlevel,1);

//$levelhundmain  = $mainlevel - $levelhund;

//echo $levelhundmain;




        

     // $html1 =  '<div class="friendPlayerLevel lvl_5000 lvl_plus_0"><span class="friendPlayerLevelNum">5000</span></div>';


     // $htmlrepl = str_replace('numhund',$levelhundmain,$html1);

      //echo $htmlrepl;





       

    }
}



?>

<html>

<head>

<body>


<link rel="stylesheet" type="text/css" href="http://localhost:81/stylesheet/Level.css">







</body>



</head>

</html>

<?php









// stylesheet also linked



?>

