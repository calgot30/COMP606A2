<?php

require_once("header.php");

$name = $_POST['JobName'];
$jobdesc = $_POST['JobDesc'];
$trade = $_POST['Trade'];
$jobcost = $_POST['JobCost'];
$jobdate = $_POST['JobDate'];
$estdate = $_POST['EstDate'];
$area = $_POST['Area'];
$cust_email = $_SESSION['Email'];


$newJob = Job::createJob($mysqli,$name, $jobdesc, $cust_email, $trade, $area, $jobcost, $jobdate, $estdate);

if(is_null($newJob)){
    echo "<div class=\"mainContent\"";
    echo "<h2>Failed to create new job</h2>";
    echo "<p><a href=\"createJob.php\">Try again.</a></p>";
    echo "</div>";

}else {
    echo "<div class=\"mainContent\"";
    echo "<h2>Thanks for listing your job!</h2>";
    echo "<p><a href=\"viewJob.php\">Click here to see all the jobs you've listed.</a></p>";
    echo "</div>";
}


?>