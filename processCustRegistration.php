<?php

/* 
    Takes the information from the register form and uses the function createCustomer from the Customer class.
    If unsuccessful lets the user know, otherwise directs them to the login menu.
*/

require_once("header.php");
$name = $_POST['CustName'];
$email = $_POST['CustEmail'];
$password = $_POST['Password'];
$number = $_POST['CustNum'];
$area = $_POST['area'];
$newCustomer = Customer::createCustomer($mysqli,$name,$email,$number,$area,$password);


    echo "<div class=\"mainContent\"";
    echo "<h2>User registered</h2>";
    echo "<p><a href=\"Login.php\">Please Login</a></p>";



?>