<?php include("header.php");

// if(isset($_SESSION["loggedin"]) == false){
//     header("Location: titlepage.php");
// }





?>



<html>
<head>
<link rel="stylesheet" href="style.css">
</head>


<body>
<?php    
echo "<div class=\"mainContent\">";


$sql_query = "SELECT cust_name,cust_email FROM customer";
$results = $mysqli->query($sql_query);
if ($results != null) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        Echo "<div>";
        echo "<table>";
        echo "<tr>";
        echo "<td>";
        echo "Customer Email: " . $row["cust_email"];
        echo "</td>";
        echo "<td>";
        echo "<br>Customer Name: " . $row["cust_name"]. "<br><br>";
        echo "</td>";
        echo "</tr>";
    Echo "</div>";
    }
}

$sql_query1 = "SELECT tradesman_name, tradesman_email FROM tradesman";
$results1 = $mysqli->query($sql_query1);
if ($results1 != null) {
    // output data of each row
    while($row = mysqli_fetch_assoc($results1)) {
        Echo "<div>";   
        // echo "<table>";
        // echo "<tr>";
        // echo "<td>";
        echo "tradie Email: " . $row["tradesman_email"]. "<br>tradie name: " . $row["tradesman_name"]. "<br><br>";
    Echo "</div>";
    }
}

?>
</body>
</html>


