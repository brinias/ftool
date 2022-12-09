<?php
ini_set('session.cokie_samesite', 'None');
ini_set('session.cookie_secure', 'True');
session_start();

$uid22=$_SESSION['uid'];

//echo $username1.$password1;

$servername = "localhost";
$username = "XXXXX";
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


$sql = "SELECT * FROM credentials where uid='$uid22'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row["name"];
  $uid = $row["uid"];





  } 
}
elseif ($uid=$uid22) {



}


else{

  echo '<script>window.location.replace("index.php");</script>';

}



?>






<html><head></head><body>


<h3>Enter the case description</h3>

<form action="case.php" method="post">
    <textarea rows="10" cols="30" name="phpvar"></textarea>
    <input type="submit" value="go" />
</form>
<br><a href="endsession.php">Logout</a>


