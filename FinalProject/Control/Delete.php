<?php
include("../model/db.php");


$connection = new mydb();
$conobj = $connection->openCon();




$idNumber = $_GET['id'];


$sql = "DELETE FROM user WHERE id = $idNumber";
$data = mysqli_query($conobj, $sql);


if ($data) {
    echo "<font color = red size = 30px> Serial: " . $idNumber;

    $result = $connection->showUser("user", $conobj);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["Name"] . " removed from the system";
            break;
        }
    }
} else {
    echo "<font color = green size = 30px> Serial: " . $idNumber;


    $result = $connection->showUser("user", $conobj);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row["Name"] . " assisting us the system";
            break;
        }
    }
}
