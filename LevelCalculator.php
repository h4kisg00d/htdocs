



<html>



    <head>



        <body>


            <style>


                body {

                    color:white;

background-color:black;
                }
            
            </style>



            <div id="Text" class="Text">
                <h1> Steam Level Calculator</h1>


                


                <style>

                    .Text {

                        color:white;

                        position:relative; 
                        
                        left:410px;



                    }

                   
                
                </style>





            </div>

            <p class="textp">This page is used to be able to calculate stats based on your level or a desired level.</p>
            <style>

             .textp {

color:white;

position:relative;

left:300px;
top:30px;


}
            </style>

            <p id="cur" class="cur" style="position:relative;left:500px; top:300px; color:white;">Your Steam level</p>




            





<form method=  "POST">
            <input type="text" class="CurLevels" name="CurLevel"  id="CurLevels" placeholder="Enter your level here">
            <style>

                .CurLevels {


                    left:490;
                    top:300px;
 position:relative;


                }
            
            </style>


<script>

    function animation() {


for (i=1; i>5; i++) // creating animations using Javascript


console.log("test");

setInterval(() => {
    
}, 3);




    }





    </script>

    <button onclick="animation()">Hello</button>


<button type="submit" class="calculate" id="calculate" name="calculate">Calculate Level</button>

<button type="button" onclick="load()">Testing</button>


            </form>
<style>

    .calculate {
        position:relative;
        left:470px;
        
        background-color:black;
        font-size:30px;
        color:white;
        top:150px;
    }




</style>


<h1 id="testt" class="testt">Amount of XP needed</h1>

<style>

    .testt {

        color:white;
    }


    </style>


<script>



function load() {

console.log("test");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange= function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("testt").innerHTML  = this.responseText;
        }
    };
    xhttp.open("GET","name.txt",true);
    xhttp.send();

        }



    </script>


<?php


if (isset($_POST['calculate']) && $_POST['CurLevel'] > 0) {
    
    

    // check if the calculate button has been pressed and whether or not the inputted level is higher than 0

    $val = $_POST['CurLevel'];


    $x = floor($val / 10);
$y = $val % 10;
echo 500 * ( $x ** 2 + $x ) + ( $y * ( 100 * $x + 100 ) );

   
echo "<br>";


$sn = 500 * ( $x ** 2 + $x ) + ( $y * ( 100 * $x + 100 ) );

$ln = $sn /100;

echo "Number of sets required to reach this level is " . $ln;


if ($_POST['CurLevel'] <20 && $_POST['CurLevel'] > 9) {

echo "<br>";

echo "<img width='100' height='100' src='https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/92/926fe1e8dc126fe3e1b4268ef18411f8c5bac786_full.jpg'>";




}








}

// 20+

if ($_POST['CurLevel'] <30 && $_POST['CurLevel'] > 19) {

    echo "<br>";
    
    echo "<img width='100' height='100' src='https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/a0/a0a2dc05c13b9c68aa6bea8a6f694555a2cb91c9_full.jpg'>";
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }








?>




        </body>





    
    </head>






</html>