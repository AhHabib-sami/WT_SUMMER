<?php

class mydb
{
    function openCon()
    {
        $dboservername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "secf";

        //$conn = new mysqli($dboservername,$dbusername,$dbpassword,$dbname);
        $conn = new mysqli($dboservername, $dbusername, $dbpassword, $dbname);


        if ($conn->connect_error) {
            echo "connect object failed" . $conn->connect_error;
        }

        return $conn;
    }

    function insertUser($conn, $tablename, $name, $uname, $pass, $pnum, $email, $age, $gnd, $date, $interest, $var_file)
    {
        $sqlstr  = "INSERT INTO $tablename (Name ,username , Password, MobileNumber ,Email ,Age ,Gender ,Date_Of_Birth,Interest,FileName ) VALUES ('$name','$uname','$pass','$pnum','$email','$age','$gnd','$date','$interest','$var_file' )";

        if ($conn->query($sqlstr)) {
            echo "data inserted ";
        } else {
            echo "error" . $conn->error;
        }
    }

    function showUser($tablename, $conn)
    {
        $sqlstr = "SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }

    function Name($tablename,$conn,$name)
    {
        $sqlstr = "SELECT Name FROM $tablename";
        return $conn->query($sqlstr);

    }
    function CheckUser($conn, $tablename, $lname, $lpass)
    {
        $result = $conn->query("SELECT * FROM " . $tablename . " WHERE Name='" . $lname . "' AND Password='" . $lpass . "'");
        return $result;
    }

    function UpdateUser($conn, $tablename, $Name, $Username, $Password, $Mobilenumber, $Email,$dateOfBirth,$idNumber){

      

        $sql = "UPDATE user SET Name='{$Name}', username='{$Username}' ,Password = '{$Password}', MobileNumber = '{$Mobilenumber}' ,Email = '{$Email}', Date_Of_Birth = '{$dateOfBirth}' WHERE ID = $idNumber";

        if ($conn->query($sql) === TRUE) {
           return true;
        } 
        else {
           return false;
        }
       
    }

    function getUser($con,$id){
        $sql = "select * from user where id='{$id}'";
        
        $result = mysqli_query($con, $sql);

        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    function loginCheck($tablename,$con,$logname,$logpass)
    {
        $sql = "SELECT * FROM $tablename WHERE name='$logname' AND password='$logpass' ";
        $result = $con->query($sql);

        return $result;
    }
}
