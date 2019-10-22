<?php include("header.php");?>
<!DOCTYPE html>
<html>
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













