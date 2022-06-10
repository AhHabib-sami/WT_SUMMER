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
     <tr><td> First Name <input type = "text"  name = "fname"> </td></tr>
     <tr><td> Last Name <input type = "text" name = "fname2"> </td></tr>
     <tr> <td>Age    <input type = "text" name = "fname3"></td></tr> 
     
     
      <tr> <td>Designation
     <input type = "radio" name = "designation" value = "junior programmer" > Junior Programmer 
     <input type = "radio" name = "designation" value = "senior programmer"> Senior Programmer 
     <input type = "radio" name = "designation" value = "project lead"> Project Lead </td></tr>

     <tr> <td>Email:
    <input type = "text" name = "mail"> </td></tr>

     <tr> <td>Password: <input type = "password" name = "pass"></td></tr>
    
     <tr><td>Preferred Language
    <input type = "checkbox"  name = "PHP" value = "PHP">PHP
     <input type = "checkbox" name = "JAVA" value = "JAVA">JAVA
    <input type = "checkbox"  name =  "CPP" value = "CPP">C++</td></tr>

      
       
      <br><tr><td>Please choose file 
      <br><input type="file"name="myfile"></td></tr>


      <tr><td><input type = "Submit"></td></tr>
      <br><tr><td><input type = "Reset"></td></tr>
      
       
</table>
</form>
</body>
</html>