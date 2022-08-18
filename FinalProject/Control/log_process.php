<?php
session_start();
include("../model/db.php");

$err = 0;
$lname =  $lpass = "";
$nameErr = $pasErr = $unameErr = "";


if (isset($_REQUEST["login"])) {

    $lname = $_REQUEST["loginName"];
    $lpass = $_REQUEST["loginpass"];
    




    $_SESSION["loginName"]= $lname;
    $_SESSION["loginpass"]= $lpass;


    if (empty($lname) || empty($lpass)) {
        echo "You have to give all the information";
    }

    else{
        $mydb = new mydb(); 
        $conobj = $mydb->openCon();
        $result = $mydb->loginCheck("user",$conobj,$lname,$lpass);

        if($result->num_rows>0)
        {
            if(isset($_REQUEST["remember"]))
            {
               setcookie("lname", $lname, time() + (86400 * 7));
               setcookie("lpass", $lpass, time() + (86400 * 7));
            }
            else
            {
                setcookie("lname", '', time() - (86400 * 7));
                setcookie("lpass", '', time() - (86400 * 7));
            }



            

            header("location:../View/Profile.php");
        }
        else
        {
        echo "Doesn't match";
        }
    }

}
