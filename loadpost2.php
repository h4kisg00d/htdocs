


<?php





function one() {


   

    

   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname);


// establishing connection to the database




$sql = "SELECT * FROM users";


$resultagain = mysqli_query($conn,$sql);



if ( mysqli_num_rows($resultagain) > 0) {


    while ($rowyes=  mysqli_fetch_assoc($resultagain)) {

        global $userid; // creating a global variable with an assigned value :)
        global $numrows;

        $userid= $rowyes['id'];
        $numrows = mysqli_num_rows($resultagain); // obtain the number of rows for the iterator

       // echo $rowyes['uidUsers'];
        //echo "<br>";
    }


}


} // first function








function two() {


echo "this is";
$servername=  "localhost";
$username = "root";
$password = "";
$dbname = "loginsystem";

$conn = new mysqli($servername,$username,$password,$dbname);






for ($x = 0; $x <= $GLOBALS['numrows']; $x++) {

// looping through an array


$hello = array($GLOBALS['userid'])

        while ($hello) {

            

        }
    
    

}



    


// establishing connection yet again

// using a select statement in order to retrieve the user

// will be accessing the value assigned to the variable in the other function, accessing it's properties.




}


one();

two();
?>