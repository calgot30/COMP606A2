<?php include("header.php");
require("classes/dbConnection.php");
include_once("classes/customer.php");


$db = dbConnection::getInstance();
$mysqli = $db->getConnection(); 
$sql_query = "SELECT cust_name,cust_email FROM customer";
$results = $mysqli->query($sql_query);
if ($results != null) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        Echo "<div>";
        echo "Customer Email: " . $row["cust_email"]. "<br>Booking Start Time: " . $row["cust_name"]. "<br><br>";
    Echo "</div>";
    }
}


$sql_query1 = "SELECT tradesman_name, tradesman_email FROM tradesman";
$results1 = $mysqli->query($sql_query1);
if ($results1 != null) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results1)) {
        Echo "<div>";
        echo "tradie Email: " . $row["tradesman_email"]. "<br>tradie name: " . $row["tradesman_name"]. "<br><br>";
    Echo "</div>";
    }
}

?>
