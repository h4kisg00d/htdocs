
<html>

<link href="https://steamcommunity-a.akamaihd.net/public/shared/css/shared_global.css?v=XpxaZbaICnNK&l=english" rel="stylesheet">


<div class="content">

<head>

<body bgcolor="black"> 




<style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>




<style>

body {


    color:white;


    background: linear-gradient(to bottom, #4c4c4c 0%,#595959 12%,#666666 25%,#474747 39%,#2c2c2c 50%,#000000 51%,#111111 60%,#2b2b2b 76%,#1c1c1c 91%,#131313 100%);
}
    </style>


<h1 style="color:white">Steam Level Calculator</h1>





<p style="color:white">This is a tool used to calculate the XP of your system level. It even displays the emblems and number of individual trading card sets. </p>







<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "level";

$conn = new mysqli($servername,$username,$password,$dbname);



$lm = $_POST['levels']; // get the level value from the input field


$sd = 1;
$xn = $lm - $sd;
$sqle = "UPDATE lvl SET Level= ". $xn  . ";";




mysqli_query($conn,$sqle);



// inserting data!


echo "<form method='POST'>


<input name='levels' placeholder='Enter level here'>


<button type='submit'>Calculate level</button>

</form>";

?>




<?php



$servername = "localhost";
$username=  "root";
$password= "";
$dbname = "level";

$conn = new mysqli($servername,$username,$password,$dbname);

$sqlo = "SELECT * FROM lvl";

$result = $conn->query($sqlo);






if ($result-> num_rows > 0) {

    while($row = $result->fetch_assoc()) {


       





//$o = $row['Level'];
//$lm = substr($mn,1);

//mne = substr($mn,2);














$var = $row['Level'];

$num = $var+1;


$sqld = "UPDATE lvl SET Level= ". $num . ";";




mysqli_query($conn,$sqld);


$test = $num;


$zee = $num;

$pl = substr($num,0);


$rr=   substr($pl,3);


$mnc = $pl - $rr;



$zim =  substr($mnc,2);

$mo = $mnc - $zim;

echo "<div style='color:white;' class='friendPlayerLevel lvl_". $mo  . " lvl_plus_". $zim . "'><span class='friendPlayerLevelNum'>".$num."</span></div>";


echo "<br>";

$val = $num;
$x = floor($val / 10);
$y = $val % 10;

echo "You will require ";
$mnv =   500 * ( $x ** 2 + $x ) + ( $y * ( 100 * $x + 100 ) ); 

$mno = number_format($mnv);

echo $mno; echo "<p style='color:white;'>XP to reach this level</p>";

echo "<br>";
echo "<p style='color:white;'>Number of sets to reach this Level is</p> ";


$varl = 500 * ( $x ** 2 + $x ) + ( $y * ( 100 * $x + 100 ) );

echo $varl/100;

$ger = $var/100;

echo " sets ";

echo "<br>";

echo "Price in sale cards is ";


$nme = 0.05* 8;

$lmo = $nme * $ger;


echo "£" . $lmo *10000 ;



// being able to work out the level!



    }
}

?>

</body>


</head>
</div>



</html>