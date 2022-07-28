<?php
$fname=$lname=$age=$gnd="";


if(isset($_REQUEST["Submit"]))
{
   
    $fname = $_REQUEST["fname"];
    if(empty($fname))
    {
        echo"Please enter first name";
    }
    
    $lname = $_REQUEST["lname"];
    if(empty(($lname)))
    {
        echo "Enter last name";
    }
    else echo $lname;
}



?>