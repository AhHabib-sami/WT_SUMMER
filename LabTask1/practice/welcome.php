<?php
echo "<br>Welcome: ". $_GET["fname"];
echo "<br>Your email address: ".$_GET["email"];
htmlspecialchars($_SERVER["PHP_SELF"]);
?>