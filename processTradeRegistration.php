<?php

require_once("header.php");

$name = $_POST['TradeName'];
$email = $_POST['TradeEmail'];
$password = $_POST['Password'];
$number = $_POST['TradeNum'];
$area = $_POST['area'];
$trade = $_POST['Trade'];

$newTradesman = Tradesman::createTradesman($mysqli,$name,$email,$number,$area,$password,$trade);

if(is_null($newTradesman)){
    "<h2>failed to create new tradesman</h2>";

}else {
    echo "<h2>User registered</h2>";
    echo "<p><a href=\"main.php\">show registered</a></p>";
}


?>