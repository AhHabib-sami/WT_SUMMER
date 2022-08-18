<?php
include("../model/db.php");


if (isset($_REQUEST['update'])) {

    
    $mydb = new mydb();
    $conobj = $mydb->openCon();
     $uid =$_REQUEST["id"];
     $name = $_REQUEST["name"];
     $usernmae = $_REQUEST["uname"];
     $password = $_REQUEST["pass"];
     $Mobile = $_REQUEST["mobile"];
     $Email = $_REQUEST["mail"];
     $dob = $_REQUEST["dob"];
     $age = $_REQUEST["age"];

    $uid = $_REQUEST['id'];

    $mydb = new mydb();
    $connobj = $mydb->opencon();
    
    $result = $mydb->UpdateUser($connobj,"user",$name,$usernmae,$password,$Mobile,$Email,$dob,$uid);
    if($result)
    {
        echo "updated";
    }
    else{
        echo "not updated";
    }
    
}

if (isset($_REQUEST['back'])) {

    
    header("location: ../Control/select.php");
}
?>