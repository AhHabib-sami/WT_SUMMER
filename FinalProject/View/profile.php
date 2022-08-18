<?php
session_start();
echo "<br><br><br>";
echo "<html align = center><head><h1>Welcome Our New CGA Mr $_SESSION[loginName] </head></h1></html>";
?>
<html>

<body>
    <link rel="stylesheet" type="text/css" href="../css/profileCs.css">

    <br><br>

    <div align="center" class="format">

        <img src="../img/bd.jpg">

        <head>
            <h1>
                <th align="center">Ministry of Finance</th>
            </h1>
        </head>
        <div>
            <h3>Government of the People's Republic of Bangladesh </h3>
        </div>
    </div>
    <?php
        $bud = 67800000000;
    ?>
    <form name = "formId">
       
    <h2>২০২১-২২ এর প্রস্তাবিত বাজেট = 
    <h2 style = "color:red;"> ৬ লাখ ৩ হাজার ৬৮১ কোটি টাকা</h2>
    <div class="dropdown">
        <label for="budget">প্রতিরক্ষা খাত</label>

        <select id="defense" name="defense" class="box" onchange="checkSelect(this.value)">
            <option>0.5</option>
            <option>0.10</option>
            <option>0.15</option>
            <option>0.20</option>
            <option>0.30</option>
            <option>0.50</option>
        </select>
        <br>
        <label>২০২১-২২ সালের প্রতিরক্ষা খাতের মোট খরচ</label>
        <input type = "text" id = "defenseBudget" class = "box" readonly>
    </div>
    </form>
</body>
<a href = "../View/logout.php">Log Out </a>
</html>
<script src="../js/profileJs.js"></script>