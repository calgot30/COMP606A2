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
    echo "<h2>failed to create new job</h2>";

}else {
    echo "<h2>cool you made your new job!</h2>";
    echo "<p><a href=\"main.php\">show jobs</a></p>";
}


?>