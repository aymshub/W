<?php
include("connect.php");

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];

$sel="INSERT into student(id,name,address,mobile,subject1,subject2,subject3) VALUES ('$id','$name','$address','$mobile','$subject1','$subject2','$subject3')";

$result=mysqli_query($dbh,$sel)
or
die("Error");

echo"success";
?>