<?php
include("../model/db.php");


$connection = new mydb();
$conobj = $connection->openCon();


$idNumber = $_GET['id'];


 
$sql = "DELETE FROM user WHERE id = $idNumber";
$data = mysqli_query($conobj,$sql);


if($data)
{
    echo "<font color = red> Serial: ". $data ."has been removed from system";
}
else{
    echo "<font color = green>is assisting with this system ";
}
?>
