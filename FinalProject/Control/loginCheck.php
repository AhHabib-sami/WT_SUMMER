<?php
include("../View/log_process.php");
$error = "";
session_start();
if (isset($_REQUEST['login'])) {
    if (empty($_POST['loginName']) || empty($_POST['loginpass'])) {
        $error = "Username or Password is invalid";
    } else {
        $logName = $_REQUEST["loginName"];
        $logPas = $_REQUEST["loginpass"];

        $mydb = new mydb();
        $conobj = $mydb->openCon();
        $userQuery = $mydb->CheckUser($conobj, "user", $logName, $logPas);
        echo $_SESSION["loginName"];
        echo $_SESSION["loginPass"];
        if ($userQuery->num_rows > 0)
        {

            $_SESSION["loginName"] = $logName;
            $_SESSION["loginPass"] = $logPas;
        }
        
        else {
            $error = "Username or Password is invalid";
            }
    }
}
