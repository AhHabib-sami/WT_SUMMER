<html>

<body>
<link rel="stylesheet" href="../css/mycss.css">
    <head>
        <h1 align="center">Information of employee</h1>
    </head>

    <?php
    include("../model/db.php");

 
  
    
    
    echo "<table border = 2>";


    $mydb = new mydb();
    $connobj = $mydb->opencon();
    $result = $mydb->showUser("user", $connobj);

    echo "<head><h3 align = center >Registered Officers are:   " . $result->num_rows . "</h1></head>";


    if ($result->num_rows > 0) {
        echo "<table style=width:100% border=2 >";
        echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> Name </th>";
        echo "<th> Username </th>";
        echo "<th> Password </th>";
        echo "<th> Mobile Number </th>";
        echo "<th> E-mail </th>";
        echo "<th> Gender </th>";
        echo "<th> Date of Birth </th>";
        echo "<th> Interest </th>";
        echo "<th> NID </th>";
        echo "<th colspan = 2> Operation </th>";
       
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {

            echo "<tr align = center>";


            echo "<td>" . $row["ID"] . "</td>";

            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["Password"] . "</td>";
            echo "<td>" . $row["MobileNumber"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Gender"] . "</td>";
            echo "<td>" . $row["Date_Of_Birth"] . "</td>";
            echo "<td>" . $row["Interest"] . "</td>";
            echo "<td>" . $row["File"] . "</td>";
            
            echo "<td> <a href=../View/editProfile.php?id=$row[ID]> Change Info </a>" . "</td>";
            echo "<td> <a href=../Control/Delete.php?id=$row[ID]> Remove </a>" . "</td>";
         
         
         

            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No Data Found";
    }


    ?>
    <br><br>
    
    <div align = "center" >
  <a href="../View/regPage.php"> <font color = "red" font size = 30px> Back </font></a>
    
    
</div>
   
</body>
<?php
    if(isset($_REQUEST["back"]))
    {
        header("../View/regPage.php");
    }
    
    ?>
</html>