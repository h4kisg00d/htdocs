

<?php



function testing() {


    // creating the function itself

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";

    $conn = new mysqli($servername,$username,$password,$dbname);

    $sql = "INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
    VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');"; // SQL statement to be executed

    $result = mysqli_query($conn,$sql);


}





?>
