



<html>

<head>

<body>

<link rel="stylesheet" type="text/css" href="https://steamcommunity-a.akamaihd.net/public/shared/css/shared_global.css?v=UJJ11NMc709K&l=english">





<style>






</style>




<style>

body {
max-width: 500px;
  margin: auto;

  background-color:black;

}
</style>


<div id="header" class="header">

<h1> Steam Level calculator </h1>



<style>


.header {
color:white;

}
</style>




</div>


<div id="paragraph1" class="paragraph1">

<p> This is a tool used for calculating information in regards to a desired Steam level. Enter your level below to work out the number of sets and other information regarding a desired Steam level. It will also specify 
the average price for the Steam level too. </p>

<style>

.paragraph1 {
color:white;
}
</style>



</div>



<div id="buttonsection" class="buttonsection">





<form method="POST">

<input type="text" placeholder="Enter level here" name="level" id="level" class="level">

<button id="button1" type ="submit" name="button1" class="button1"> Calculate</button>


<style>

.button1 {

background-color:black;
color: white;
position:relative;
top: 160px;
left: -20px;

}

</style>



<style>


.level {

    position:relative;
    left:100px;
    top: 90px;
}

</style>

</form>





</div>



</body>


</head>



</html>

<?php




if (isset($_POST['button1'])) {




    


   echo '<p style="color:white;position:relative;left:80px;top:150px;">Information regarding sets below</p>';


   // now working out the information regarding level

   $level = $_POST['level'];
   // get the level

   $x = floor($level / 10);
$y = $level % 10;
$ze =  500 * ( $x ** 2 + $x ) + ( $y * ( 100 * $x + 100 ) );

$xpvalue = $ze;

$format = number_format($xpvalue);

$string = '<p style="color:white;position:relative;top:150px;">You will need TEEHEE XP to reach level</p>';

$replace = str_replace('TEEHEE',$format,$string);




// more info


$setworked = $xpvalue /100;

$setf = number_format($setworked);



$stringset = '<p style="color:white;position:relative;top:150px;">You will need HAEHa sets of trading cards to reach this level</p>';

$lp = str_replace('HAEHa',$setf,$stringset);

echo $lp;



// pricing

$setworked1 = $level/100  *3 *$level;

//$setf1 = number_format($setworked);


$finae = number_format($setworked1);

$stringset1 = '<p style="color:white;position:relative;top:150px;">That will be a total price of $BLEHBLEHBLEH</p>';

$lp1 = str_replace('BLEHBLEHBLEH',$finae,$stringset1);

echo $lp1;






if ($level < 999) {

    echo $replace;
    
}



if ($level < 999) {


    $stored =  '<div style="position:relative; left:280px;top:110px;"  class="friendPlayerLevel lvl_numhund lvl_plus_numplus"><span class="friendPlayerLevelNum">mainw</span></div>';


    $numbhun  = substr($level,1,2);

    
    $numhunn = $level - $numbhun;


    $actualnumber = $level;



    $levelpluss = substr($level,2);


    $zed = $levelpluss;

    
    $numberpluss = $actualnumber - $zed;


    $tada =  substr($numberpluss,1,2);





    $replace1 = str_replace('numhund',$numhunn,$stored);

    $replace2=  str_replace('mainw',$actualnumber,$replace1);

    $replace3 = str_replace('numplus',$tada,$replace2);
    echo $replace3;

  

    



 


} else {


    


    // now working out the information regarding level
 
    $level = $_POST['level'];
    // get the level
 
    $x = floor($level / 10);
 $y = $level % 10;
 $ze =  500 * ( $x ** 2 + $x ) + ( $y * ( 100 * $x + 100 ) );
 
 $xpvalue = $ze;
 
 $format1 = number_format($xpvalue);
 
 $string1 = '<p style="color:white;position:relative;top:150px;">You will need TEEHEE XP to reach level</p>';
 
 $replace1 = str_replace('TEEHEE',$format1,$string1);
 
 echo $replace1; // 
 
 
 



 
 
 
     $stored1 =  '<div style="position:relative; left:280px;top:110px;"  class="friendPlayerLevel lvl_numhund lvl_plus_numplus"><span class="friendPlayerLevelNum">mainw</span></div>';
 
 
     $numbhun1  = substr($level,2,3);
 
     
     $numhunn1 = $level - $numbhun1;
 
 
     $actualnumber1 = $level;
 
 
 
     $levelpluss1 = substr($level,3);
 
 
     $zed1 = $levelpluss1;
 
     
     $numberpluss1 = $actualnumber1 - $zed1;
 
 
     $tada1 =  substr($numberpluss1,2,4);
 
 
 
 
 
     $replace11 = str_replace('numhund',$numhunn1,$stored1);
 
     $replace21=  str_replace('mainw',$actualnumber1,$replace11);
 
     $replace31 = str_replace('numplus',$tada1,$replace21);
     echo $replace31;


}


}









// used for calculating


?>