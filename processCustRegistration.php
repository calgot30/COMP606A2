<?php
require_once("header.php");

$newCustomer = Customer::RegisterUser($mysqli,$_POST['CustName'],$_POST['CustEmail'],$_POST['CustNum'],$_POST['area'],$_POST['Password']);

if(is_null($newCustomer)){
    "<h2>failed to create new customer</h2>";

}else {
    echo "<h2>User registered</h2>";
    echo "<p><a href=\"main.php\">show registered</a></p>";
}

require_once("footer.php");

?>