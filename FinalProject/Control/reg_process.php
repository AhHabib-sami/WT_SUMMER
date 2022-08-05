
<?php
session_start();
include("../model/db.php");
$f = $l = $s = $var_data = $var_gender = $varUname = $var_data = $var_file = $gnd = $pass = $interest = $dateOfBirth = "";
$firstName = $password = $name = $emailerr = $age = $gnd = $uname = $var_gender = $interest = $pass = $pnum = "";

$hasError = 0;
$id = "CGA101";
//Next button



if (isset($_REQUEST["Submit"])) {

    if (!($_SESSION["Submit"])) {
        $_SESSION["Submit"] = 1;
    } else {
        $count = $_SESSION['Submit'] + 1;
        $_SESSION['Submit'] = $count;
    }
    $interest = $pass = "";
    $name = $_REQUEST["fname"];
    $_SESSION["fname"] = $name;

    if (empty($name)) {
        $hasError = 1;
    } else {
        $hasError;
    }


    $uname = $_REQUEST["uname"];

    if (empty($uname)) {
        echo "Please insert your user name";

        $hasError = 1;
    } else {
        echo "User name is" . $uname;
    }


    $pass = $_REQUEST["pass"];

    if (empty($pass)) {
        $hasError = 1;
    } else {

        if (strlen($pass) < 8) {

            $password = "Give a password more than 8 character";
            if (!is_numeric($pass)) {
                $password = "Give a password which contain at least one numeric";
            }
        } else {
            $hasError;
        }




        if (isset($_REQUEST["LIT"]) && isset($_REQUEST["MAT"]) && isset($_REQUEST["SC"])) {

            $interest = " " . $_REQUEST["LIT"] . " , " . $_REQUEST["MAT"] . " , " . $_REQUEST["SC"];
        } else if (isset($_REQUEST["LIT"]) && isset($_REQUEST["MAT"])) {
            $interest = " " . $_REQUEST["LIT"] . ", " . $_REQUEST["MAT"];
        } else if (isset($_REQUEST["LIT"])  && isset($_REQUEST["SC"])) {
            $interest = " " . $_REQUEST["LIT"] . ",  " . $_REQUEST["SC"];
        } else if (isset($_REQUEST["MAT"]) && isset($_REQUEST["SC"])) {
            $interest = " " . $_REQUEST["MAT"] . ", " . $_REQUEST["SC"];
        } else if (isset($_REQUEST["LIT"])) {
            $interest = $_REQUEST["LIT"];
        } else if (isset($_REQUEST["MAT"])) {
            $interest = $_REQUEST["MAT"];
        } else if (isset($_REQUEST["SC"])) {
            $interest = $_REQUEST["SC"];
        } else $hasError = 1;
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

    //$gnd = $_REQUEST["gender"];



    $pnum = $_REQUEST["phone"];
    if (empty($pnum)) {
        $hasError = 1;
    } else if (preg_match('/^[0-9]{10}+$/', $pnum)) {
        echo "Valid Phone Number";
    } else {
        echo "Invalid Phone Number";
    }




    if (isset($_REQUEST["myfile"])) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Upload/" . $_FILES["myfile"]["name"])) {
            echo "I am file";
            $var_file = $_FILES["myfile"]["name"];
            echo "File is uploaded";
        } else {
            if (empty($_REQUEST["myfile"])) {
                $hasError = 1;
            }
            echo "file is not uploaded";
        }
    }



    if (isset($_REQUEST["gender"])) {
        $gnd = $_REQUEST["gender"];
        if (empty($gnd)) {
            $hasError = 1;
        } else $gnd = $_REQUEST["gender"];
    }


    if (isset($_REQUEST["dob"])) {
        if (empty($_REQUEST["dob"])) {

            $hasError = 1;
        }

        $dateOfBirth = $_REQUEST["dob"];
        $date = date('Y-m-d', strtotime($_REQUEST["dob"]));
        $today = date('Y-m-d');
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        echo 'Your age is ' . $diff->format('%y');
    }
    //database code



    if ($hasError == 1) {
        header("../view/regPage.php");
    } else {

        $mydb = new mydb();
        $conobj = $mydb->openCon();

        $result =  $mydb->insertUser($conobj, "user", $name, $uname, $pass, $pnum, $email, $age, $gnd, $date, $interest, $var_file);

        if ($result === TRUE) {
            echo "<br>done";
        } else {
            echo "<br>NOT done" . $conobj->error;
        }
    }
}

if (isset($_REQUEST["showData"])) {

    header("location: ../Control/select.php");
}
$error = "";

if (isset($_POST["update"])) 
{

   header("location: ../View/editProfile.php");
}










        // $jsontemp = file_get_contents("../data/data.json");
        // $jsonmiddle = json_decode($jsontemp);
        // $jsonmiddle[] = $mydata;
        // //$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        // $finaldata = json_encode($jsonmiddle, JSON_PRETTY_PRINT);

        // if (file_put_contents("../data/data.json", $finaldata)) {
        //     $var_data = "data saved";
        // }
