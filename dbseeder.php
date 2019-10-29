<?php require_once("dbconnect.php");?>
<?php 


echo "<h3>*** DATABASE SEEDER RUNNING ***</h3>";
echo "creating table products ...<br>";
//$mysqli->query("DROP TABLE IF EXISTS tradesman");


$sql1 = 
"CREATE TABLE `safetrade.tradesman` (
    `tradesman_id` int(11) NOT NULL,
    `tradesman_name` varchar(255) NOT NULL,
    `tradesman_email` varchar(255) NOT NULL,
    `tradesman_password` varchar(255) NOT NULL,
    `tradesman_number` int(20) NOT NULL,
    `area` varchar(30) NOT NULL,
    `trade_name` varchar(30) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;"
;

$mysqli->query($sql1);
echo "populating table products ...<br>";

$sql2 = "


INSERT INTO `tradesman` (`tradesman_name`, `tradesman_email`, `tradesman_password`, `tradesman_number`, `area`, `trade_name`) VALUES 
('bob the builder', 'bob@builder.com', 'passwordbob', 3214896, 'Northland', 'Building & carpentry'),
('Sophey Thornber', 'sthornber1@wiley.com', 'o6qlSczJgS7', '1498121792', null, null),
('Fidelio Jeayes', 'fjeayes2@wikispaces.com', 'FbpEBWB5fq', '7091660601', null, null),
('Cooper Anfossi', 'canfossi3@craigslist.org', 'mH3nd30b35eY', '6982482977', null, null),
('Silas Pennoni', 'spennoni4@wp.com', 'JomEOxEiG', '8043863931', null, null),
('Monah Freshwater', 'mfreshwater5@ucoz.com', 'PieEWvCFk', '6246966939', null, null),
('Angel Bartleet', 'abartleet6@addthis.com', '9lpIE3CZh89', '1786527441', null, null),
('Meggi Frankis', 'mfrankis7@bbb.org', 'gShSC3W2jS', '2876425175', null, null),
('Noam Veneur', 'nveneur8@amazon.co.jp', 's64uePYDUw8', '8363264870', null, null);

";
$mysqli->multi_query($sql2);
echo "retrieving tables in $database ...<br>";
$result = $mysqli->query("SHOW TABLES");
while($row = $result->fetch_row()){
  echo $row[0];
}
echo "<h3>*** DATABASE SEEDER FINISHED ***</h3>";
?>