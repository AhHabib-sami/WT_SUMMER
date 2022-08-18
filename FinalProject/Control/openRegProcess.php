<?php

if(isset($_REQUEST["submit"]))
{
    $nid = $_REQUEST["number"];
    if(empty($nid))
    {
        echo "You have to enter the data";
    }
    else
    {
            header("location: ../View/regPage.php");
    }
}
?>