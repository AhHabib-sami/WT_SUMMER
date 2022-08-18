<?php
include("../Control/openRegProcess.php");
?>

<html>
    <title>Integrated Budget And Accounting System</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/8/84/Government_Seal_of_Bangladesh.svg">
   
    <body>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
        <br><br>
        
        
        <div align = "center" class = "form">
        
        <head>
            <h1 align = "center">Register Yourself</h1>
        </head>
        
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return formcheck()">
        <table>
        <tr>
            <td>
                Enter Your Service ID
            </td>
            <td><input type="text" name = "number" id = "number" placeholder="service/NID number" onkeyup="checkID()"></td>
           
            <td><input type="submit" name = "submit" id = "submit" value = "Go>>" align = "center" class="btn"></td>
            <td><p id = "numError"></p></td>
        </tr>
        <tr align="right">
            <td >
               
            
                <input type="submit" name = "back" id = "submit" value = "<<Back" align = "center" class = "disabled">
            </td>
        </tr>


      



        </table>
        </form>
            
        </div>
       
    </body>

</html>
<script src="../js/RegJs.js"></script>