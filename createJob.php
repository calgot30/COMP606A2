<?php include("header.php");

// if(isset($_SESSION["loggedin"]) == false){
//     header("Location: titlepage.php");
// }

?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>


<body>

<div class=bkingsFormContainer>

<div class=bkingsContainer >
    <h2>So you've got a job?</h2>
    <p>Our tradies need to know the details so pop them in on the form below and they will be able to see your listing and give you the estimates you need to get the job done!</p>

    <form action="processJob.php" method="POST">

    Job Name: <br>
    <input type="text" name="JobName" placeholder="Describe what you need done" size="57"><br>

    Job description:<br>
    <textarea name="JobDesc" id="Desc" maxlength="256" placeholder="Whether its the roof or the loo, tell us what you need" style="width:450px; height:100px;"></textarea><br>

    <?php

//used this code to create an sql form dump in case the list gets updated in the future https://www.e-education.psu.edu/geog863_gmaps/db_p9.html
        $user = "guest";
        $password = "";
        $database = "safetrade";
        $host = "localhost";

        //connects to mysql
        $mysqli = mysqli_connect($host, $user, $password, $database);

        $sql = "SELECT trade_name FROM trade GROUP BY trade_name;";

        //uses a for loop to dump out the data
        $result = mysqli_query($mysqli,$sql);
        if ($result != null) {
            echo 'Trade:<br>';
            echo '<select name="Trade">';
            $trade = $_POST['Trade'];
            $num_results = mysqli_num_rows($result);
            for ($i=0;$i<$num_results;$i++) {
                $row = mysqli_fetch_array($result);
                $name = $row['trade_name'];
                echo '<option value="' .$name. '">' .$name. '</option>';
            }
            echo '</td>';
            echo '</select>';
            
        }

        mysqli_close($mysqli);

?>
<br>
    Cost expectation: <br>
    <input type="text" name="JobCost" placeholder="How much are you hoping it will be" size="57"><br>



    Date required: <br>
    <input type="date" name="JobDate" onChange="getDay(this.value);<?php echo date('Y-m-d');?>" required><br>

    Estimate close date: <br>
    <input type="date" name="EstDate" onChange="getDay(this.value);"<?php echo date('Y-m-d');?>" required>
    
    <div class =bkSubmit>
        <input type="submit" value = "Submit">
    </div>

</div>



</body>
</html>