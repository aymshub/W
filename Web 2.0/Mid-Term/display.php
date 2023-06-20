<?php
include("connect.php"); 
$query = "select * from student"; 
$result = mysqli_query($dbh,$query) 
or
die("Error querying the database");
echo "<br/>";

echo"fetching success"; 
echo "<br><br/>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
{
    echo "ID: ";
    echo $row['id']."<br>";
    echo "Name: ";
    echo $row['name']."<br>";
    echo "Address: ";
    echo $row['address']."<br>";
    echo "Mobile: ";
    echo $row['mobile']."<br>";
    echo "Subect-1 marks: ";
    echo $row['subject1']."<br>";
    echo "Subect-2 marks: ";
    echo $row['subject2']."<br>";
    echo "Subect-3 marks: ";
    echo $row['subject3']."<br>";
    echo "Total Marks: ";
    echo $row['subject1']+$row['subject2']+$row['subject3'];
}
?>