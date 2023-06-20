<?php
include("connect-2.php");

$name=$_POST['name'];
$rollno=$_POST['rollno'];
$cgpa=$_POST['cgpa'];
$branch=$_POST['branch'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];

$sel="INSERT into studentdb (Name,RollNo,CGPA,Branch,Mobile,Gender) VALUES ('$name','$rollno','$cgpa','$branch','$mobile','$gender')";

$result=mysqli_query($dbh,$sel)
or
die("Error");

echo"success";
?>