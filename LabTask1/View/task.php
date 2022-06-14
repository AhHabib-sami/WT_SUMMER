<?php

include("../control/ctrl.php")
?>
<html>
    <head>
        <title> task</title>
</head>
<body>

    <h1> Welcome to the registration form </h1>
    
    <form action="" method="post" enctype="multipart/form-data">   
        
  <table>
    <tr><td> First Name <input type = "text"  name = "fname"> 
    <?php
    
      echo  $firstName;
     
    ?></td></tr>
    
    
    
    <tr><td> Last Name <input type = "text" name = "fname2"> 
    <?php
     
       echo  $lastName;
     
      
    ?></td></tr>
  
  </td></tr>
     <tr> <td>Age<input type = "text" name = "fname3">
     <?php
     
      echo $var_age;
     
     ?>
    </td></tr> 
    
  <tr> <td>Email:
    <input type = "text" name = "mail">
    <?php
    
      echo $var_mail;
    
      
    ?>
  </td></tr>

  <tr> <td>Password: <input type = "password" name = "pass">
    <?php
    
      echo $var_password;
    

   ?>
  
</td></tr>
     
    <tr> <td>Designation
     <input type = "radio" name = "designation" value = "junior programmer" > Junior Programmer 
     <input type = "radio" name = "designation" value = "senior programmer"> Senior Programmer 
     <input type = "radio" name = "designation" value = "project lead"> Project Lead 
     <!-- ?php echo $var_des; ? -->
    </td></tr>


    
  <tr><td>Preferred Language
    <input type = "checkbox"  name = "PHP" value = "PHP">PHP
    <input type = "checkbox" name = "JAVA" value = "JAVA">JAVA
    <input type = "checkbox"  name =  "CPP" value = "CPP">C++
   <!--?php
   if(!isset($_REQUEST["PHP"]) && (!isset($_REQUEST["JAVA"])) && !isset($_REQUEST["CPP"]))
   {
    echo "please select your preferred language ";
   }
   ?-->
  </td></tr>

        
      <br><tr><td>Please choose file 
      <br><input type="file"name="myfile">
    <?php 
      echo $var_file;
    
  ?>
  </td></tr>


      <tr><td><input type = "Submit" name = "submit"></td></tr>
      <br><tr><td><input type = "Reset">
      <tr><td><input type = "next"></td></tr>
      <?php
      
        if(isset($_REQUEST["fname"]) || isset($_REQUEST["fname2"]) || isset($_REQUEST["fname3"]) || isset($_REQUEST["mail"]) || isset($_REQUEST["pass"]) || isset($_REQUEST["designation"])|| isset($_REQUEST["PHP"])||isset($_REQUEST["JAVA"])||isset($_REQUEST["CPP"]) ||isset($_REQUEST["myfile"]))
        { 
          echo "<br>" .$var_data;
        }
        else echo ""  ;
      
      ?>  
      </td></tr>

</table>
</form>
</body>
</html>
    