<?php 
include_once ('classes/customer.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    //script to create the tabs for the login and registration pages
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>

<body>
<div class ="topnav" id="navbarNav">
<div class ="mainbar" id="barMain">

<div class ="logo" id="logoHome">
<img src="Assets/logo.png" alt="Logo Home-Page" height="110" width="125">
</div>



</div>
</div>


<div class="formRight">
    <img src="Assets/plumber_edit.png" alt="plumber doing a thumbs up and smiling" height="250" width="250">
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