 <?php

include('database.php');
$db=$connection;


   
 if(!empty(isset($_POST['username'])) && isset($_POST['username'])){
    $usernameInput= $_POST['username'];
    checkUsername($connection, $usernameInput);
   
 }
 
 
function legal_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}
 function insert_data($firstName, $mobile){
 
     global $db;

      $query="INSERT INTO users(firstName,mobile) VALUES('$firstName','$mobile')";

     $execute=mysqli_query($db,$query);
     if($execute==true)
     {
       echo "User data was inserted successfully";
     }
     else{
      echo  "Error: " . $sql . "<br>" . mysqli_error($db);
     }
 }

 function checkUsername($connection, $usernameInput){
    $query = "SELECT username FROM users WHERE username='$usernameInput'";
    $result = $connection->query($query);
    if ($result->num_rows > 0) {
      echo "<span style='color:red'>This username is taken. Try another</span>";
    }else{
      echo "<span style='color:green'>This username is available</span>";
    }
  }

$firstName     = legal_input($_POST['firstName']);
 $mobile         = legal_input($_POST['mobile']); 

 if(!empty($firstName) && !empty($mobile)){
     Insert_data($firstName,$mobile);
 }else{
  echo "All fields are required";
 }
 
?>