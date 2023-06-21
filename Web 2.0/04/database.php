<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "04";
$connection = mysqli_connect($hostname, $username, $password,$databasename);
if (!$connection) {
    die("ERROR " . mysqli_connect_error());
}
?>