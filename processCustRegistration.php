<?php
require_once("header.php");
$name = $_POST['CustName'];
$email = $_POST['CustEmail'];
$password = $_POST['Password'];
$number = $_POST['CustNum'];
$area = $_POST['area'];
$newCustomer = Customer::createCustomer($mysqli,$name,$email,$number,$area,$password);

if(is_null($newCustomer)){
    echo "<div class=\"mainContent\"";
    echo "<h2>failed to create new customer</h2>";
    echo "</div>";

}else {
    echo "<h2>User registered</h2>";
    echo "<p><a href=\"main.php\">show registered</a></p>";
}


?>