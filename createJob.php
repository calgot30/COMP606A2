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
    <textarea name="Reason" id="Reason" maxlength="256" placeholder="Whether its the roof or the loo, tell us what you need" style="width:450px; height:100px;"></textarea><br>


</div>



</body>
</html>