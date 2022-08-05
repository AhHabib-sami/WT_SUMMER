<?php

include("../Control/reg_process.php");


if (isset($_REQUEST['update'])) {

    
    $mydb = new mydb();
    $conobj = $mydb->openCon();



    $result = mysqli_query($conn, "SELECT * FROM user WHERE ID='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($result);

    $name = $_REQUEST["fname"];
    $uname = $_REQUEST["uname"];
    $pass = $_REQUEST["pass"];
    $Interest = $_REQUEST["LIT"];
    $email = $_REQUEST["mail"];
    $age = $_REQUEST["age"];
    $pnum = $_REQUEST["phone"];
    $var_file = $_FILES["myfile"]["name"];
    $des = "../Upload/" . $_FILES["myfile"]["name"];
    move_uploaded_file($var_file, $des);

    //$userType = $_REQUEST['userType'];

    /*$phoneNumber = $_REQUEST['phoneNumber'];*/





    if ($name != null && $uname != null && $pass != null  && $Interest != null && $email != null && $age != null && $pnum != null && $var_file != null) {



        $result =  $mydb->UpdateUser($conobj, "user", $name, $uname, $pass, $pnum, $email, $age, $gnd, $date, $Interest, $_FILES['myfile']['name']);
        if ($result) {
            echo "<font color =green> SUCCESSFUL!";
        } else {
            echo "<font color =red> NOT SUCCESSFUL!";
        }
    } else {
        echo "null submission";
    }
} else if (isset($_REQUEST['back'])) {
    header('location: ../View/regPage.php');
}
