<?php

require "header.php";



?>


<main>

<h1> Signup</h1>


<form action="signup2.php" method="post">

<input type="text" name="uid" placeholder="Username">
<input type="text" name="mail" placeholder="Email">
<input type="password" name="pwd" placeholder="Password">
<input type="password" name="pwd-repeat" placeholder="Repeat password">

<button type="submit" name="signup-submit">Signup</button>

</form>


</main>

<?php
require "footer.php";

?>