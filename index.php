<?php
ini_set('session.cokie_samesite', 'None');
ini_set('session.cookie_secure', 'True');
session_start();

$uid22=$_SESSION['uid'];

//echo $username1.$password1;

$servername = "localhost";
$username = "XXXXX";
$password = "XXXXXX";
$dbname = "XXXXXXX";

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

  $_SESSION['uid'] = $uid;

  $_SESSION['name'] = $name;
  
  echo '<script>window.location.replace("caseinput.php");</script>';



  } 
}
elseif ($uid=$uid22) {

  echo '<script>window.location.replace("caseinput.php");</script>';


}


else{


}



?>







<form action="login.php" method="post">
<h1>Welcome to Ftool, please login<br></h1>
    </div>
  
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
  <br><br>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  <br>
      <button type="submit">Login</button>
      <label>
      <br>  <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
   
  </form>
 