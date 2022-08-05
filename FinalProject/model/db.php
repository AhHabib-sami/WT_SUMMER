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
        $sqlstr  = "INSERT INTO $tablename (Name ,username , Password, MobileNumber ,Email ,Age ,Gender ,Date_Of_Birth,Interest,File ) VALUES ('$name','$uname','$pass','$pnum','$email','$age','$gnd','$date','$interest','$var_file' )";

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

    
    function CheckUser($conn, $tablename, $name, $pass)
    {
        $result = $conn->query("SELECT * FROM " . $tablename . " WHERE Name='" . $name . "' AND Password='" . $pass . "'");
        return $result;
    }



    function UpdateUser($conn, $tablename, $name, $uname, $pass, $pnum, $email, $age, $gnd, $date, $interest, $var_file)
    {
        $sql = "UPDATE user SET Name='{$name}', username='{$uname}' ,Password = '{$pass}', MobileNumber = '{$pnum}' ,Email = '{$email}' Age = '{$age}' Gender = '{$gnd}' Date_Of_Birth = '{$date}' Interest = '{$interest}' File = '{$var_file}'  WHERE Name=$name";

        if ($conn->query($sql) === TRUE) {
            echo "Data updated";
        } else {
            echo "Data not updated";
        }
    }
}
