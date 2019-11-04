<?php

/* 
    Takes the information from the estimate form and uses the function createEstimate from the Estimate class.
    If unsuccessful lets the user know, otherwise directs them to the main menu.
*/

require_once("header.php");

$job_id = $_POST['JobID'];
$tradesman_email = $_SESSION['Email'];
$total_cost = $_POST['JobCost'];
$cost_parts = $_POST['CostParts'];
$estimate_exp = $_POST['EstExp'];


$newEstimate = Estimate::createEstimate($mysqli,$job_id,$tradesman_email,$total_cost,$cost_parts,$estimate_exp);

if(is_null($newEstimate)){
    echo "<h2>failed to create new job</h2>";

}else {
    echo "<div class=\"mainContent\"";
    echo "<h2>cool you made your new job!</h2>";
    echo "<p><a href=\"main.php\">show jobs</a></p>";
    echo "</div>";
}


?>