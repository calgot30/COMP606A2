<!-- 
    Navbar for all of the pages on the website, it creates the 
    navigation links for all of the pages.  Some are hidden behind PHP
    IF statments which determine whether the user is logged in 
    with a SESSION or not, to display or not display those links.
 -->
<div class ="topnav" id="navbarNav">

<div class ="mainbar" id="barMain">

<!--
    Created a logo from this website https://hatchful.shopify.com
    and made it usable as a home page button.
 -->
<div class ="logo" id="logoHome">
<a href="main.php"><img src="Assets/logo.png" alt="Logo Home-Page link" height="100" width="125"></a>
</div>

<div class ="navbar" id="barNav">
<!--
    Unordered list for the links for nav bar
 -->
<ul>
<li><a href="main.php">Home</a></li>





<?php
// Check if the user is logged in, if no, show this login nav
if(isset($_SESSION["loggedin"]) == true){
    echo "<li><a href=\"profilePage.php\">Profile</a></li>";
} 
?>


<?php
// Check if the user is logged in, if yes show this booking nav
if(isset($_SESSION["loggedin"]) == true){
    echo "<li><a href=\"createJob.php\">Create a Job</a></li>";
} 
?>


<?php
// Check if the user is logged in, if yes show this booking nav
if(isset($_SESSION["loggedin"]) == true){
    echo "<li><a href=\"CheckYourBooking.php\">Check Your Bookings</a></li>";
} 
?>

<li><a href="ContactUs.php">Contact Us</a></li>

<?php
//if the user is logged in, show this nav
if(isset($_SESSION["loggedin"])== true){
    echo "<li><a href=\"logout.php\">Logout</a></li>";
}
?>



</ul>
</div>
</div>
</div>



