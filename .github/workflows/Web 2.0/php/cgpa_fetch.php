<?php
include("connect_student.php"); // including connect.phpfile into testdb.php
$query = "select * from student where cgpa>6.5"; // user_infois a table from Demo database
$result = mysqli_query($dbh,$query) or
die("Error querying the database");
echo "<br/>";
echo"fetchingsuccess"; // not required only for initial code
echo "<br/>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) //mysqli_fetch_assoc($result);
{
echo $row['Name']." ";
echo $row['Rollno']." ";
echo $row['CGPA']." ";
echo $row['Branch']." ";
echo $row['Mobile']." ";
echo $row['Gender']."<br><br>";
}
?>