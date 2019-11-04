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


$sql_query = "SELECT cust_name,cust_email,cust_number,area from customer where cust_email = '$_SESSION[Email]'";
$results = $mysqli->query($sql_query);
if ($results != null) {

    Echo "<div>";
        echo "<table class=\"job_display\">";

        echo "<tr>";
        echo "<th>Customer</th>";
        echo "<th>Email</th>";
        echo "<th>Number</th>";
        echo "<th>Area</th>";
        echo "</tr>";

    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        

        echo "<tr>";
        echo "<td>" . $row["cust_name"]. "</td>";
        echo "<td>";
        echo "<br>" . $row["cust_email"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["cust_number"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["area"]. "<br><br>";
        echo "</td>";
        echo "</tr>";
        
    Echo "</div>";
    }
    echo "</table>";
}


?>
</body>
</html>