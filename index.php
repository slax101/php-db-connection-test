<?php
$hostname = "192.168.33.14";
$username = "root";
$password = "abc";

//Connect to MySQL DB
$conn = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL on " . $hostname . "<br>";


//List available DBs
echo "Database List:<br>";

$res = mysql_query("SHOW DATABASES");

while ($row = mysql_fetch_assoc($res)) {
  echo $row['Database'] . "<br>";
}

//Close MySQL connection
mysql_close($conn);
?>