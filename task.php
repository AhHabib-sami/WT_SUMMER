
<html>
    <head>
        <title> My Home</title>
</head>
<body>
    <h1> This is home </h1>
    
    <form action = "../control/ctrl.php " method="REQUEST"> 
        <table>
     <tr><td> First Name <input type = "text"  name = "fname"> </td></tr>
     <tr><td> Last Name <input type = "text" name = "fname2"> </td></tr>
     <tr> <td>Age    <input type = "text" name = "fname3"></td></tr> 
     
     
      <tr> <td>Destination
     <input type = "radio" name = "designation" > Junior Programmer 
     <input type = "radio" name = "designation"> Senior Programmer 
     <input type = "radio" name = "designation"> Project Lead </td></tr>

     <tr> <td>Email: <input type = "text"></td></tr>
     <tr> <td>Password: <input type = "password" name = "pass"></td></tr>
    
     <tr><td>Preferred Language
    <input type = "checkbox"  name = "ch1" value = "c1">PHP
     <input type = "checkbox" name = "ch2" value = "c2">JAVA
    <input type = "checkbox" name = "ch2" value = c3>C++</td></tr>

      <tr> <td>Email:
       <input type = "text" name = "mail"> </td></tr>
       
     <tr><td> Please choose a file <input type = "text" value = "choose file"> No file chosen</td></tr>
        <tr><td><input type = "Submit"></td></tr>
        <tr><td><input type = "Reset"></td></tr>
      
       
</table>
</form>
</body>
</html>