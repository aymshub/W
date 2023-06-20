<?php
include("connect.php");

$id=$_POST['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];

$sel="INSERT into student(id,name,age,gender) VALUES ('$id','$name','$age','$gender')";

$result=mysqli_query($dbh,$sel)
or
die("Error");

echo"success";
?>