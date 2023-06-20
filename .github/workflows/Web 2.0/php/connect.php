<?php
$db_host="localhost";
$db_user="root";
$db_passwd="";
$db_name="bca0004";

$dbh=mysqli_connect($db_host,$db_user,$db_passwd,$db_name)
or
die("Error connecting to the db");

echo"Connection was successful!";
?>