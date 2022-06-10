<?php

$name = $_REQUEST["fname"];
$name2 = $_REQUEST["fname2"];
if(empty($name))
{
    echo "<br>Name should be filled ";
}
else{
    echo "Your name is ".$name;
    if(strlen($_REQUEST["fname"])<4)
    {
        echo"<br> Please input your first name more than 4 char";
    }
    if(strlen($_REQUEST["fname2"])<4)
    {
        echo"<br> Please input your second name more than 4 char";
    }
}

    
   if (isset($_REQUEST["PHP"]) && isset($_REQUEST["JAVA"]) && isset($_REQUEST["CPP"]))
    {
       echo "<br> languages ".$_REQUEST["PHP"]. " and ".$_REQUEST["JAVA"]." and ".$_REQUEST["CPP"];
       $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["JAVA"]." and " .$_REQUEST["CPP"];
    }
   
    else if (isset ($_REQUEST["JAVA"]) && isset($_REQUEST["CPP"]))
    {
        echo "<br> You have selected ".$_REQUEST["JAVA"]." and ".$_REQUEST["CPP"];
        $prefdata = $_REQUEST["JAVA"]." and ".$_REQUEST["CPP"];

    }
    else if (isset ($_REQUEST["PHP"]) && isset($_REQUEST["CPP"]))
    {
        echo "<br> You have selected ".$_REQUEST["PHP"]." and ".$_REQUEST["CPP"];
        $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["CPP"];
    }
    else if (isset ($_REQUEST["PHP"]) && isset($_REQUEST["JAVA"]))
    {
        echo "<br> You have selected ".$_REQUEST["PHP"]." and ".$_REQUEST["JAVA"];
        $prefdata = $_REQUEST["PHP"]." and ".$_REQUEST["JAVA"];
    }
    
    else if(isset($_REQUEST["PHP"])) {
        echo "<br> You have selected ". $_REQUEST["PHP"];
        $prefdata = $_REQUEST["PHP"];
    
    }
    else if(isset($_REQUEST["JAVA"]))
    {
        echo "<br> You have selected ". $_REQUEST["JAVA"];
        $prefdata = $_REQUEST["JAVA"];
    

    }
    else if (isset($_REQUEST["CPP"]))
    {
        echo "<br> You have selected ".$_REQUEST["CPP"];
        $prefdata = $_REQUEST["CPP"];
    }

else 
{
    echo "<br>Please enter your preferred language";
    $prefdata="";
}

if(isset($_REQUEST["designation"]))
{
   // $_designation=$_REQUEST["designation"];
    echo"<br> You have selected  ".$_REQUEST["designation"];
}
else{
    echo "<br>Please choose designation";
    $_REQUEST["designation"] ="";
}

$sami = $_REQUEST["pass"];

if(strlen($sami>4) && is_numeric($sami)){
    echo "<br>Your password is valid";
}
else{
    echo "<br>Your password must be more than 4 char with numeric";
}


//if(isset($_REQUEST["ch1"]) && isset($_REQUEST["ch2"]) && (isset($_REQUEST["ch3"] )))
//{
 //   echo "<br> You have selected ".$_REQUEST["ch1"]. "and" .$_REQUEST["ch2"]. "and". $_REQUEST["ch3"];
//}






if(empty($_REQUEST["mail"]))
{
    echo"<br> enter mail";
}
else {
  
    echo "<br>Your mail id is ".$_REQUEST["mail"];
}
//Declaration for preferred langages

echo "<br>".$_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../upload/".$_FILES["myfile"]["name"]))
{
    echo "File uploaded";
}
else{
    echo "File not uploaded";
}
    

$mydata =  array
(
    'firstname' => $name,
    'second name' => $name2,
    'password' => $_REQUEST["pass"],
    'E-mail' => $_REQUEST["mail"],
    'Preferred Languages' => $prefdata,
    'FILE'=>$_FILES["myfile"]["name"],
    'Designation' => $_REQUEST["designation"]
    

);
$jsondata=json_encode($mydata, JSON_PRETTY_PRINT);
if(file_put_contents("../data/data.json",$jsondata)){
    echo "<br>data saved";
}

?>