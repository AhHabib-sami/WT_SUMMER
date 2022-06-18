<?php
session_start();

$var_data = $var_gender = $varUname= "";
$firstName = $password = $name = $emailerr = $age = $gnd = $uname= "";
$hasError = 0;

if (isset($_REQUEST["submit"])) {

  
    $name = $_REQUEST["fname"];

    if (empty($name)) {
        $hasError = 1;
        $firstName = "*Name is Mandatory*";
    } else {
        $hasError;
        

        $firstName = "Your name is: " . $name;
    }


    $name2 = $_REQUEST["pass"];
   
    if (empty($name2)) {
        $hasError = 1;
        $password = "*password is Mandatory*";
    } else {

        if (strlen($name2) < 8) {

            $password = "Give a password more than 8 character";
            if (!is_numeric($name2)) {
                $password = "Give a password which contain at least one numeric";
            }
        } else {
            $hasError;
            $password = "Valid Password";
        }
    }

    $email = $_REQUEST["mail"];
    
    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $hasError = 1;
        $emailerr = "Invalid email";
    } else {
        $hasError;
        $emailerr = " Your email is:" . $email;
    }

    $age = $_REQUEST["age"];


    if (empty($age)) {
        $var_age = "Please insert your age";
    } else {
        $var_age = "Age is " . $age;
    }


    if (isset($_REQUEST["submit"])) {
        $mydata =  array(
            'firstname' => $name,
            'Password' => $name2,
            'E-mail' => $email,
            'Age' => $age
        );


        $jsondata = json_encode($mydata, JSON_PRETTY_PRINT);
        if (file_put_contents("../data/data.json", $jsondata)) {
            $var_data = "data saved";
        }
    }
}
//Next button


if (isset($_REQUEST["next"])) {
  
    $name = $_REQUEST["fname"];

    if (empty($name)) {
        $hasError = 1;
    } else {
        $hasError;
     
    }

    $name2 = $_REQUEST["pass"];
  
    if (empty($name2)) {
        $hasError = 1;
    } else {

        if (strlen($name2) < 8) {

            $password = "Give a password more than 8 character";
            if (!is_numeric($name2)) {
                $password = "Give a password which contain at least one numeric";
            }
        } else {
            $hasError;
        }
    }

    $email = $_REQUEST["mail"];
  
    if (empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
        $hasError = 1;
    } else {
        $hasError;
        $emailerr = " Your email is:" . $email;
    }

    $age = $_REQUEST["age"];
   
    if (empty($age)) {
        $var_age = "Please insert your age";
        $hasError = 1;
    } else {
        $var_age = "Age is " . $age;
    }

    $gnd = $_REQUEST["gender"];
   
    if (isset($_REQUEST["gender"])) {

        $var_gender = $gnd;
    } else {
        $var_gender = "You have to select gender";
    }


    $uname = $_REQUEST["uname"];
    
    if (empty($uname)) {
        $varUname = "Please insert your user name";
        $hasError = 1;
    } else {
        $varUname = "User name is" . $uname;
    }





    if (isset($_REQUEST["next"])) {
        if (isset($_REQUEST["gender"])) {
            $mydata =  array(
                'firstname' => $name,
                'UserName' =>$uname,
                'Password' => $name2,
                'E-mail' => $email,
                'Age' => $age,
                'gender' => $gnd

            );

            $jsontemp = file_get_contents("../data/data.json");
            $jsonmiddle = json_decode($jsontemp);
            $jsonmiddle[] =$mydata;
          //$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
            $finaldata = json_encode($jsonmiddle, JSON_PRETTY_PRINT);

            if (file_put_contents("../data/data.json", $finaldata)) {
                $var_data = "data saved";
            }
        }
        else{
            $var_data = "data not saved";
        }

        if ($hasError == 1) {
            header("Location: ../VW/page.php");
        } else if ($hasError == 0) {
            header("Location: ../VW/Task2.php");
        }
    }
}
