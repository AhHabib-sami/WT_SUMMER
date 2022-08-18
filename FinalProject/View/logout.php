<?php
session_start();
session_destroy();
echo "<font size = 10px>You Successfully Log out</font>";
echo "<br><font size = 10px>click <a href = ../View/logPage.php> Here </a> to log in again </font>";

?>