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

<title>JobSeekers</title>
</head>
<!-- 
-Registration form
-Depending on which tab they use will determine their registration location
 -->
<head>
<body>
<div id="tabs">
<ul>
    <li><a href="#tabs-1">Customer Registration</a></li>
    <li><a href="#tabs-2">Tradesman Registration</a></li>
</ul>

<div id ="tabs-1">
    <div class="formContainer">
        <h2>Sign Up Now</h2>
        <p>If you're a new customer, enter your details below</p>
        <form action="processCustRegistration.php" method="POST">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="CustName"></td>
                </tr>               
                <tr>
                    <td>Email address:</td>
                    <td><input type="text" name="CustEmail"></td>
                </tr>
               
                <tr>
                    <td>Mobile number:</td>
                    <td><input type="int" name="CustNum"></td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><select name="location">
                            <option value="Northland">Northland</option>
                            <option value="Auckland">Auckland</option>
                            <option value="Waikato">Waikato</option>
                            <option value="Bay of Plenty">Bay of Plenty</option>
                            <option value="Gisborne">Gisborne</option>
                            <option value="Hawke's Bay">Hawke's Bay</option>
                            <option value="Taranaki">Taranaki</option>
                            <option value="Whanganui">Whanganui</option>
                            <option value="Manawatu">Manawatu</option>
                            <option value="Wairarapa">Wairarapa</option>
                            <option value="Wellington">Wellington</option>
                            <option value="Nelson Bays">Nelson Bays</option>
                            <option value="Marlborough">Marlborough</option>
                            <option value="West Coast">West Coast</option>
                            <option value="Canterbury">Canterbury</option>
                            <option value="Timaru">Timaru</option>
                            <option value="Oamaru">Oamaru</option>
                            <option value="Otago">Otago</option>
                            <option value="Southland">Southland</option>                    
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td> <input type="password" name="Password"></td>
                </tr>
                <tr>
                <td><input type="submit" value = "Submit"></td>
                </tr>
                </table>
        </form>
    </div>
</div>


<div id = "tabs-2">
<div class="formContainer">
        <h2>Sign Up Now</h2>
        <p>Tradesman looking for work? Sign up right here! </p>
        <form action="processTradeRegistration.php" method="POST">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="TradeName"></td>
                </tr>               
                <tr>
                    <td>Email address:</td>
                    <td><input type="text" name="TradeEmail"></td>
                </tr>
                
                <tr>
                    <td>Mobile number:</td>
                    <td><input type="int" name="TradeNum"></td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><select name="location">
                            <option value="Northland">Northland</option>
                            <option value="Auckland">Auckland</option>
                            <option value="Waikato">Waikato</option>
                            <option value="Bay of Plenty">Bay of Plenty</option>
                            <option value="Gisborne">Gisborne</option>
                            <option value="Hawke's Bay">Hawke's Bay</option>
                            <option value="Taranaki">Taranaki</option>
                            <option value="Whanganui">Whanganui</option>
                            <option value="Manawatu">Manawatu</option>
                            <option value="Wairarapa">Wairarapa</option>
                            <option value="Wellington">Wellington</option>
                            <option value="Nelson Bays">Nelson Bays</option>
                            <option value="Marlborough">Marlborough</option>
                            <option value="West Coast">West Coast</option>
                            <option value="Canterbury">Canterbury</option>
                            <option value="Timaru">Timaru</option>
                            <option value="Oamaru">Oamaru</option>
                            <option value="Otago">Otago</option>
                            <option value="Southland">Southland</option>                    
                    </td>
                </tr>

                <tr>

                    <?php

                                $user = "guest";
                                $password = "";
                                $database = "safetrade";
                                $host = "localhost";

                                //connects to mysql
                                $mysqli = mysqli_connect($host, $user, $password, $database);

                                $sql = "SELECT trade_name FROM trade GROUP BY trade_name;";

                                $result = mysqli_query($mysqli,$sql);
                                if ($result != 0) {
                                    echo '<label>Trade:';
                                    echo '<select name="Trade">';
                                    echo '<option value="">all</option>';

                                    $num_results = mysqli_num_rows($result);
                                    for ($i=0;$i<$num_results;$i++) {
                                        $row = mysqli_fetch_array($result);
                                        $name = $row['trade_name'];
                                        echo '<option value="' .$name. '">' .$name. '</option>';
                                    }

                                    echo '</select>';
                                    echo '</label>';
                                }

                                mysqli_close($mysqli);

                    ?>

                </tr>

                <tr>
                    <td>Password: </td>
                    <td> <input type="password" name="Password"></td>
                </tr>
                <tr>
                <td><input type="submit" value = "Submit"></td>
                </tr>
                </table>
        </form>
    </div>
</div>
</body>
</html>













