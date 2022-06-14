<?php


session_start();
//name variable will be stored in session
$firstName = "";


$lastName = "";

$prefdata = "";
$var_password = "";
$var_mail="";
$var_des = "";
$_var_file = "";
$var_data = "";
$var_age =0;

$hasError = 0;

   
    $name = $_REQUEST["fname"];
    $name2 = $_REQUEST["fname2"];
    $age = $_REQUEST["fname3"];

    if(empty($firstName))
    {
        
            $firstName = "*Name is Mandatory*";
        
      
    }
    else{
        $_SESSION["name"]=$name; //name declared
    
        $firstName = "Your name is: ".$name;
        if(strlen($_REQUEST["fname"])<4)
        {
            $firstName = "Please input your first name more than 4 char";
        }
       
    }
    
    if(empty($name2))
    {
        $hasError = 1;
    
        $lastName = " *Name is Mandatory* ";
    }
    
    else{
        $lastName = "Your last name is: ".$name2;
        if(strlen($_REQUEST["fname2"])<4)
        {
            $lastName = "Please input your last name more than 4 char";
        }
    }
    
    if(empty($age))
    {
        $hasError = 1;
        $var_age = "*Age is mandatory* ";
    }
    
    else 
     {
        $var_age = "Your age is ".$age;
     }
    
     
       if (isset($_REQUEST["PHP"]) && isset($_REQUEST["JAVA"]) && isset($_REQUEST["CPP"]))
        {
           //echo "<br> languages ".$_REQUEST["PHP"]. " and ".$_REQUEST["JAVA"]." and ".$_REQUEST["CPP"];
           $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["JAVA"]." and " .$_REQUEST["CPP"];
        }
       
        else if (isset ($_REQUEST["JAVA"]) && isset($_REQUEST["CPP"]))
        {
            //echo "<br> You have selected ".$_REQUEST["JAVA"]." and ".$_REQUEST["CPP"];
            $prefdata = $_REQUEST["JAVA"]." and ".$_REQUEST["CPP"];
    
        }
        else if (isset ($_REQUEST["PHP"]) && isset($_REQUEST["CPP"]))
        {
            //echo "<br> You have selected ".$_REQUEST["PHP"]." and ".$_REQUEST["CPP"];
            $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["CPP"];
        }
        else if (isset ($_REQUEST["PHP"]) && isset($_REQUEST["JAVA"]))
        {
            //echo "<br> You have selected ".$_REQUEST["PHP"]." and ".$_REQUEST["JAVA"];
            $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["JAVA"];
        }
        
        else if(isset($_REQUEST["PHP"])) {
            //echo "<br> You have selected ". $_REQUEST["PHP"];
            $prefdata = $_REQUEST["PHP"];
        
        }
        else if(isset($_REQUEST["JAVA"]))
        {
            //echo "<br> You have selected ". $_REQUEST["JAVA"];
            $prefdata = $_REQUEST["JAVA"];
        
    
        }
        else if (isset($_REQUEST["CPP"]))
        {
            //echo "<br> You have selected ".$_REQUEST["CPP"];
            $prefdata = $_REQUEST["CPP"];
        }
    
    else 
    {
       // echo "<br>Please enter your preferred language";
        $prefdata="";
    }
    
    if(isset($_REQUEST["designation"]))
    {
       // $_designation=$_REQUEST["designation"];
        $var_des = "Your selected designation is: ".$_REQUEST["designation"];
    }
    else{
        $var_des = "Please choose one designation";
        $_REQUEST["designation"] ="";
    }
    
    $sami = $_REQUEST["pass"];
    
    if(empty($sami))
    {
        $var_password = "*Password is mandatory*";
    }
    else{
        if( is_numeric($sami)){
    
            if(strlen($sami)<4)
            {
                $var_password = "You have to put more than 4 characters password";
            }
            else {
                $var_password = "valid password";
            }
        }
        else $var_password = "Invalid password";
    }
    
    //if(!is_numeric($sami)) $var_password = "Password is invalid";
    
    
    //if(isset($_REQUEST["ch1"]) && isset($_REQUEST["ch2"]) && (isset($_REQUEST["ch3"] )))
    //{
     //   echo "<br> You have selected ".$_REQUEST["ch1"]. "and" .$_REQUEST["ch2"]. "and". $_REQUEST["ch3"];
    //}
    
    $email = $_REQUEST["mail"];
    
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $var_mail = "*E-mail is mandatory*";
    }
    else{
       $var_mail = "Email is ".$email;
    }
    //Declaration for preferred langages
    
    
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/".$_FILES["myfile"]["name"]))
    {
        $var_file = $_FILES["myfile"]["name"];
    }
    else{
        $var_file = "upload a file";
    }
        
    
    $mydata =  array
    (
        'firstname' => $name,
        'second name' => $name2,
        'Age' => $var_age,
        'password' => $_REQUEST["pass"],
        'E-mail' => $_REQUEST["mail"],
        'Preferred Languages' => $prefdata,
        'FILE'=>$_FILES["myfile"]["name"],
        'Designation' => $_REQUEST["designation"]
        
    
    );
    
    
    
    $jsondata=json_encode($mydata, JSON_PRETTY_PRINT);
    if(file_put_contents("../data/data.json",$jsondata)){
        $var_data = "data saved";
    }
    


?>