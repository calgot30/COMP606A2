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


$sql_query = "SELECT job_name, cust_email,area,date_needed, total_cost,cost_parts FROM job j JOIN estimate e ON j.job_id = e.job_id where tradesman_email = '$_SESSION[Email]' and est_accepted = 1";

$results = $mysqli->query($sql_query);
if ($results != null) {

    Echo "<div>";
        echo "<table class=\"job_display\">";

        echo "<tr>";
        echo "<th>Job</th>";
        echo "<th>Customer Email</th>";
        echo "<th>Area</th>";
        echo "<th>Date Needed</th>";
        echo "<th>Total cost</th>";
        echo "<th>Cost parts</th>";
        echo "</tr>";

    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        

        echo "<tr>";
        echo "<td>" . $row["job_name"]. "</td>";

        echo "<td>";
        echo "<br>" . $row["cust_email"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["area"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["date_needed"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["total_cost"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["cost_parts"]. "<br><br>";
        echo "</td>";
        echo "</tr>";
        
    Echo "</div>";
    }
    echo "</table>";
}


?>
</body>
</html>


