<?php require_once("dbconnect.php");?>
<?php 


echo "<h3>*** DATABASE SEEDER RUNNING ***</h3>";
echo "creating table tradesman ...<br>";
$mysqli->query("DROP TABLE IF EXISTS tradesman");


<<<EOD
This is a test
EOD;

$sql = <<<EOD
CREATE TABLE `tradesman` (
`tradesman_id` int(11) NOT NULL,
`tradesman_name` varchar(255) NOT NULL,
`tradesman_email` varchar(255) NOT NULL,
`tradesman_password` varchar(255) NOT NULL,
`tradesman_number` int(20) NOT NULL,
`area` varchar(30) NOT NULL,
`trade_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
EOD;

$mysqli->query($sql);


echo "populating table products ...<br>";

$sql = <<<EOD
INSERT INTO `tradesman` (`tradesman_id`, `tradesman_name`, `tradesman_email`, `tradesman_password`, `tradesman_number`, `area`, `trade_name`) VALUES 
(20, 'bob the builder', 'bob@builder.com', 'passwordbob', '3214896', 'Northland', 'Building & carpentry'),
(12, 'Sophey Thornber', 'sthornber1@wiley.com', 'o6qlSczJgS7', '1498121792','Auckland', 'Electrician'),
(13, 'Fidelio Jeayes', 'fjeayes2@wikispaces.com', 'FbpEBWB5fq', '7091660601','Auckland', 'Glazier'),
('Cooper Anfossi', 'canfossi3@craigslist.org', 'mH3nd30b35eY', '6982482977','Waikato','Handy-persons'),
('Silas Pennoni', 'spennoni4@wp.com', 'JomEOxEiG', '8043863931','Gisborne','Painting'),
('Monah Freshwater', 'mfreshwater5@ucoz.com', 'PieEWvCFk', '6246966939','Wellington','Roofer'),
('Angel Bartleet', 'abartleet6@addthis.com', '9lpIE3CZh89', '1786527441','Canterbury','Electrician'),
('Meggi Frankis', 'mfrankis7@bbb.org', 'gShSC3W2jS', '2876425175','Waikato','Building & Carpentry'),
('Noam Veneur', 'nveneur8@amazon.co.jp', 's64uePYDUw8', '8363264870','Northland','Roofer');
EOD;


$mysqli->multi_query($sql);
echo "retrieving tables in $database ...<br>";
$result = $mysqli->query("SHOW TABLES");
while($row = $result->fetch_row()){
  echo $row[0];
}
echo "<h3>*** DATABASE SEEDER FINISHED ***</h3>";
?>