<?php
include_once 'Classes/customer.php';
$customer = new Customer();

if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
    $login = $customer->CheckLogin($email,$password);
    if ($login) {
        header("location:main.php");
    }
    else {
        echo 'Wrong username or password';
    }
}











?>