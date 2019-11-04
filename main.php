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


$sql_query = "SELECT job_id,job_name,job_desc,cust_email,trade_name,area,preferred_cost,date_needed,offer_end_date FROM job";
$results = $mysqli->query($sql_query);
if ($results != null) {

    Echo "<div>";
        echo "<table class=\"job_display\">";
        echo "<tr>";
        echo "<th>Job ID</th>";
        echo "<th>Job</th>";
        echo "<th>Description</th>";
        echo "<th>Customer Email</th>";
        echo "<th>Area</th>";
        echo "<th>Preferred Cost</th>";
        echo "<th>Date Needed</th>";
        echo "<th>Closing Date</th>";
        echo "</tr>";

    // output data of each row
    while($row = mysqli_fetch_assoc($results)) {
        ?>
       <!-- // echo "<tr onclick=\"location.href='detailView.php' ?var=\"job_id\"\" style=\"cursor:pointer\" method=\"POST\">";
       //echo "<tr onclick=\"location.href='detailView.php?ID= -->
       <tr onclick="location.href='detailView.php?ID=<?php echo "$row[job_id]";?>';">
       <?php
       echo "<td>";
        echo "<br>" . $row["job_id"]. "<br><br>";
        echo "</td>";
        echo "<td>" . $row["job_name"]. "</td>";
        echo "<td>";
        echo "<br>" . $row["job_desc"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["cust_email"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["area"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>$" . $row["preferred_cost"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["date_needed"]. "<br><br>";
        echo "</td>";
        echo "<td>";
        echo "<br>" . $row["offer_end_date"]. "<br><br>";
        echo "</td>";
        echo "</tr>";
        
    Echo "</div>";
    }
    echo "</table>";
    
}

/* <tr onclick="location.href='campaign_detail.php?ID=<?php echo "$row[0]";?>';"> */


/* onclick=\"document.location='home.asp'\" style=\"cursor:pointer\" */

// $sql_query1 = "SELECT tradesman_name, tradesman_email FROM tradesman";
// $results1 = $mysqli->query($sql_query1);
// if ($results1 != null) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($results1)) {
//         Echo "<div>";   
//         // echo "<table>";
//         // echo "<tr>";
//         // echo "<td>";
//         echo "tradie Email: " . $row["tradesman_email"]. "<br>tradie name: " . $row["tradesman_name"]. "<br><br>";
//     Echo "</div>";
//     }
// }

?>
</body>
</html>


