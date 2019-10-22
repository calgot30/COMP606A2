<?php

require "classes/customer.php";
$mark = new Customer("1","Billy Bob","billy@bob.com","password1","0211234567","Hawkes Bay","1");

$mark->debug();


$mike = new Tradesman("1","Billy Bob","billy@bob.com","password1","0211234567","Hawkes Bay","1","Painter","1");
$mike->debug();







?>