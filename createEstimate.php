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