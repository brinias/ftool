<?php
ini_set('session.cokie_samesite', 'None');
ini_set('session.cookie_secure', 'True');
session_start();

$uid22=$_SESSION['uid'];

$username1= $_POST['username'];
$password1= $_POST['password'];

//echo $username1.$password1;

$servername = "localhost";
$username = "XXXX";
$password = "XXXXX";
$dbname = "XXXXXX";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  #echo "cannot connect";
}

############################queries#######################


$sql = "SELECT * FROM credentials where username='$username1' and password='$password1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row["name"];
  $uid = $row["uid"];
  
 
$_SESSION['uid'] = $uid;

$_SESSION['name'] = $name;

echo '<script>window.location.replace("caseinput.php");</script>';


  } 
}
elseif ($uid=$uid22) {

   echo '<script>window.location.replace("caseinput.php");</script>';


}


else{

  echo '<script>window.location.replace("index.php");</script>';

}



?>


