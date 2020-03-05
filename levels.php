
<?php
// usage https://www.taniarascia.com/how-to-use-json-data-with-php-or-javascript/
// the following file is going to be used to interact with the Steam API in order to retrieve specific data. In this regard, the data will be the level of the

// it's going to work by accessing a JSON dictionary comprising of a key and a value, the key representing the name and the value is the value assigned



?>


<?php



$user =  json_decode($data);

// as seen above, there is JSON data. This JSON data is readable after being decoded and then the properties and values can easily be accessed.

echo $user->name; // the user will be H4k as that is what is being retrieved upon decoding the JSON data
echo "<span>"; 
echo ", your level is "  . $user->Level . "</span>"; 
echo "<br>";

$myfile = fopen("Testingg.php", "w"); // open the file to write
$txt = '{
	"name": "H4k",
	"Level": "900"
}';
fwrite($myfile,$txt);
fclose($myfile);

?>