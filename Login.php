<?php include("header.php");
include_once ('classes/customer.php');
?>
<!DOCTYPE html>
<html>
<head>
<body>

<div class="formRight">
    <img src="Assets/plumber_edit.jpg" alt="plumber doing a thumbs up and smiling" height="250" width="250">
    </div>


<div class="formRight">

        <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Customer Login</a></li>
            <li><a href="#tabs-2">Tradesman Login</a></li>
        </ul>
        <div id ="tabs-1">
            <!--<div class ="container col-md-4"> -->
                <div class ="LoginFormContainer">
                    <h2>Enter your details to login</h2>

                    <form action="processLoginCust.php" method="POST" name = "login">
                        <table>
                        <tr>
                        <td>Email Address: </td>
                        <td><input type ="text" placeholder="example@thisisnotanemail.com" name = "Email"> </td>
                        </tr>
                        <tr>
                        <td>Password: </td>
                        <td><input type = "password" placeholder="Password" name = "Password"></td>
                        </tr>   
                        <td><input type = "submit" name = "submit" value ="Login"></td>
                        </tr>
                        </table>
                    </form>
                </div>
            <!--</div> -->
        </div>


        <div id = "tabs-2">
        <title>Login</title>
        <!--<div class ="container col-md-4"> -->
            <div class ="TradesmanFormContainer">
                <h2>Enter your details to login</h2>

                <form action="processLoginTrade.php" method="POST">
                <table>
                <tr>
                <td>Email Address: </td>
                <td><input type ="text" placeholder="example@thisisnotanemail.com" name = "TherEmail"> </td>
                </tr>
                <tr>
                <td>Password: </td>
                <td><input type = "password" placeholder="Password" name = "TherPassword"></td>
                </tr>   
                <td><input type = "submit" value ="Login"></td>
                </tr>
                </table>
                </form>
            </div>
        <!--</div> -->
        </div>

        </div>
</div


</body>
</html>