<?php include("header.php");

/* 
    Tradesman have the ability to create an estimate on a job that is on the website, it allows them to make an offer on a job of their choosing.
*/

// if(isset($_SESSION["loggedin"]) == false){
//     header("Location: titlepage.php");
// }

?>

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>


<body>

<div class="bkingsFormContainer">

<div class="bkingsContainer" >
    <h2>Want to make an offer on a job?</h2>
    <p>Complete this form and send the client the offer!</p>

    <form action="processCreateEstimate.php" method="POST">

    Job ID: <br>
    <input type="text" name="JobID" placeholder="Describe what you need done" size="57"><br>
 
    Total cost: <br>
    <input type="text" name="JobCost" placeholder="How much are you hoping it will be" size="57"><br>
    
    Cost breakdown:<br>
    <textarea name="CostParts" id="CostParts" maxlength="256" placeholder="Whether its the roof or the loo, tell us what you need" style="width:450px; height:100px;"></textarea><br>

    Estimate expires: <br>
    <input type="date" name="EstExp" onChange="getDay(this.value);"<?php echo date('Y-m-d');?>" required><br><br>
    
    <div class =bkSubmit>
        <input type="submit" value = "Submit">
    </div>

</div>

</form>

</body>
</html>