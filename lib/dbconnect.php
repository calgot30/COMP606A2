  
<?php
error_reporting(0);

$user = "guest";
$password = "";
$database = "safetrade";
$host = "localhost";

$mysqli = mysqli_connect($host, $user, $password, $database);

if ($mysqli == false){
  header("location: sitedown.php");
}

$mysqli->autocommit(true);

// make sure we see all errors
error_reporting(E_ALL);
?>