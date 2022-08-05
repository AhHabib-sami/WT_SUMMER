<?php
session_start();
include("../model/db.php");

//$gnd = "";
//if (isset($_REQUEST["submit2"])) {

//$gnd = $_REQUEST["gender"];
//$_SESSION["gender"] = $gnd;

//if (isset($_REQUEST["gender"])) {

//  $var_gender = $gnd;
//} else {
//   $var_gender = "You have to select gender";
// }

//if (isset($_REQUEST["gender"])) {
//  $mydata =  array(
//       'firstname' => $_SESSION["fname"],
//     'Password' => $_SESSION["pass"],
//    'E-mail' => $_SESSION["mail"],
//     'Age' => $age,
//    'gender' => $gnd

//);

// $jsontemp = json_decode(file_get_contents("../data/data.json"));

// $jsontemp[] = $mydata;
//$finaldata = json_encode($jsontemp, JSON_PRETTY_PRINT);
//
// if (file_put_contents("../data/data.json", $finaldata)) {
//    $var_data = "data saved";
// /    // }
// }
//}
$err = 0;
$lname =  $lpass = "";
$nameErr = $pasErr = $unameErr = "";


if (isset($_REQUEST["login"])) {

    
    $lname = $_REQUEST["loginName"];
    $_SESSION["loginName"] = $lname;

    //$luname = $_REQUEST["uname"];

    $lpass = $_REQUEST["loginpass"];
    $_SESSION["loginpass"] = $lpass;
    // $_SESSION["loginName"] = $lname;
    $err = 1;
    echo $err;
    if (empty($lname) || empty($lpass)) {
        echo "You have to give all the information";
    } 
    else {
       
        $mydb = new mydb();
        $connobj = $mydb->opencon();
        $exist = mysqli_real_escape_string($connobj,$_REQUEST["loginName"]);
        $sql = "";
        $result = mysqli_query($connobj,$sql);

        $userQuery = $mydb->CheckUser($connobj, "user", $lname, $lpass);

        if ($userQuery->num_rows > 0) {
            echo "<div> style=color:red<b>".$exist."</b>is not available";
            $_SESSION["loginName"] = $lname;
            $_SESSION["loginpass"] = $lpass;
        }
        if($_SESSION["loginName"] = $lname && $_SESSION["loginpass"] = $lpass)
        {
            header("location: ../View/profile.php");
        }
        else{
            header("location: ../view/logPage.php");
        }
    }
   
}
if(isset($_REQUEST["edit"]))
{
    header("../View/editProfile.php");
}



        // $jsondata = file_get_contents("../data/data.json");
        // $phpdata = json_decode($jsondata);

        // foreach ($phpdata as $finaldata) {
        //     if (($_REQUEST["loginName"] == $finaldata->firstname) && ($_REQUEST["loginpass"] == $finaldata->Password)) {
        //         header("Location: ../VW/loginMessageSu.php");
        //         break;
        //     } 
        //     else {
        //         header("Location: ../VW/Task.php");
        //     }
        // }
       
    
    //echo $_REQUEST["loginName"];



    // $luname = $_REQUEST["uname"];
    // $_SESSION["uname"] = $luname;
    // if (empty($luname)) {
    //     $err = 1;
    //    $unameErr = "You have to input your User name";
    // } else {
    //   $unameErr = "Your user name is ".$luname;

    //}






    // $lpass =  $_REQUEST["loginpass"];
    // $_SESSION["loginpass"] = $lpass;

    // if (empty($lpass)) {
    //     $err = 1;
    //     $pasErr = "*password is Mandatory*";
    //  } else {

    //    if (strlen($lpass) < 8) {

    //        $pasErr = "Give a password more than 8 character";
    //        if (!is_numeric($lpass)) {
    //            $pasErr = "Give a password which contain at least one numeric";
    //       }
    //   } else {
    //       $err;
    //        $pasErr = "Valid Password";
    //    }
    //  }

    //condition check
    // if($err == 1)
    // {
    //     header("Location: ../VW/loginMessageU.php");
    // }
    // else{
    //     header("Location: ../VW/loginMessageSu.php");
    // }
