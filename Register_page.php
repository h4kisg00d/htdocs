
<html>


<head>

<body>

<br>

<?php

    require 'functions/check.php'; // requiring the file
    require 'loginpages.php'; // require the file

    


    if (isset($_POST['Signup'])) {

         $output = createuser($_POST['username9'],$_POST['password9']);

    
    }

?>

</body>

</head>


</html>

