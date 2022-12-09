<?php

//////////////elegxos session///////////////////////////////

ini_set('session.cokie_samesite', 'None');
ini_set('session.cookie_secure', 'True');
session_start();

$uid22=$_SESSION['uid'];

//echo $username1.$password1;

$servername = "localhost";
$username = "XXX";
$password = "XXXXX";
$dbname = "XXXX";

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

//////////////elegxos session///////////////////////////////



//////////////////////////firebase1/////////////////////


$newtoken= shell_exec("sudo python /var/www/html/ftool/at.py");
$correction=".......................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................";
$newtoken2= str_replace($correction,'',$newtoken);
$newtoken3= substr($newtoken2, 0, -1);
$rtdb="https://dbinstancename.europe-west1.firebasedatabase.app/";
$pretoken=".json?access_token=";
$aftertoken="&print=";

///////////////// suggestions////////////////

/////////verification_ssl///////////////
$rtdbcategory="suggestions/verification_ssl/example_reply";

$rtdb1=$rtdb.$rtdbcategory.$pretoken.$newtoken3.$aftertoken;

$rtdbresult1= file_get_contents($rtdb1);

$sugssl=json_decode($rtdbresult1,true);

///////////////Deceptive///////////////////////////////


$rtdbcategorydec="suggestions/deceptive/example_reply";

$rtdb2=$rtdb.$rtdbcategorydec.$pretoken.$newtoken3.$aftertoken;

$rtdbresult2= file_get_contents($rtdb2);

$sugdec=json_decode($rtdbresult2,true);


////////////////////domain_another_project////////////////

$rtdbcategoryanother="suggestions/domain_another_project/example_reply";

$rtdb3=$rtdb.$rtdbcategoryanother.$pretoken.$newtoken3.$aftertoken;

$rtdbresult3= file_get_contents($rtdb3);

$suganother=json_decode($rtdbresult3,true);


///////////////////////////cli/////////////////////////

$rtdbcategorycli="suggestions/cli/example_reply";

$rtdb4=$rtdb.$rtdbcategorycli.$pretoken.$newtoken3.$aftertoken;

$rtdbresult4= file_get_contents($rtdb4);

$sugcli=json_decode($rtdbresult4,true);


/////////////////////404//////////////////////////

$rtdbcategory404="suggestions/domain_error_like_404/example_reply";

$rtdb5=$rtdb.$rtdbcategory404.$pretoken.$newtoken3.$aftertoken;

$rtdbresult5= file_get_contents($rtdb5);

$sug404=json_decode($rtdbresult5,true);



/////////////////////////////////////////////PLAYBOOK////////////////////////////

/////////////////ssl/////////////////////

$rtdbcategoryplssl="playbook/verification_ssl";

$rtdb6=$rtdb.$rtdbcategoryplssl.$pretoken.$newtoken3.$aftertoken;

$rtdbresult6= file_get_contents($rtdb6);

$playbookssl=json_decode($rtdbresult6,true);

//////////////deceptive//////////////////

$rtdbcategorypldec="playbook/deceptive";

$rtdb7=$rtdb.$rtdbcategorypldec.$pretoken.$newtoken3.$aftertoken;

$rtdbresult7= file_get_contents($rtdb7);

$playbookdec=json_decode($rtdbresult7,true);

////////////////domain_another_project///////////////

$rtdbcategoryplanother="playbook/domain_another_project";

$rtdb8=$rtdb.$rtdbcategoryplanother.$pretoken.$newtoken3.$aftertoken;

$rtdbresult8= file_get_contents($rtdb8);

$playbookanother=json_decode($rtdbresult8,true);

//////////////cli/////////////////////////

$rtdbcategoryplcli="playbook/cli";

$rtdb9=$rtdb.$rtdbcategoryplcli.$pretoken.$newtoken3.$aftertoken;

$rtdbresult9= file_get_contents($rtdb9);

$playbookcli=json_decode($rtdbresult9,true);

/////////////////404//////////////////////////////////

$rtdbcategorypl404="playbook/cli";

$rtdb10=$rtdb.$rtdbcategorypl404.$pretoken.$newtoken3.$aftertoken;

$rtdbresult10= file_get_contents($rtdb10);

$playbook404=json_decode($rtdbresult10,true);




?>




<?php
$close='"';
$phpvar=$close.$_POST['phpvar'].$close;

//////////domain recognition/////////
echo "<b> Mentioned domain names:</b><br>";
preg_match_all('#[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?#si', $phpvar, $result);

foreach ($result[0] as $url)
{
    echo $url . "<br />\n";
}


//foreach ($result[0] as $url)
//{

//}


/////////////////////////////////////////

//$phpvar='"but the staff was so horrible to us	"';
//echo shell_exec("python /var/www/html/test88.py $phpvar");

//echo $phpvar;


//$command = escapeshellcmd('sudo pip install --ignore-installed future scikit-multilearn pandas python-dateutil scikit-learn pytz --force-reinstall');
//$output = exec($command);
//echo $output;

$command = escapeshellcmd('python /var/www/html/test88.py '. $phpvar);
$output = exec($command);
//echo $output;
//$output2="[[1 2 3 4 5]]";
$verification_ssl = mb_substr($output, 2, 1); 
$deceptive = mb_substr($output, 3, 2); 
$domain_another_project = mb_substr($output, 5, 2); 
$cli = mb_substr($output, 7, 2); 
$domain_error_like_404 = mb_substr($output, 9, 2); 


//echo "<br>".$service."<br>".$food."<br>".$anecdotes."<br>".$price."<br>".$ambience;

echo "<b>Related categories: <br></b>";

if ($verification_ssl == "1") {
      echo 'verification_ssl<br>';
}

if ($deceptive == "1") {
      echo 'deceptive<br>';
}

if ($domain_another_project == "1") {
      echo 'domain_another_project<br>';
}


if ($cli == "1") {
      echo 'cli<br>';
}


if ($domain_error_like_404 == "1") {
      echo 'domain_error_like_404<br>';
}


if ($output == "[[0 0 0 0 0]]") {
      echo 'No category mached';
}


echo("<button onclick=\"location.href='caseinput.php'\">Back to Home</button>");

//////////////////////////////SSL_domain_connect_function///////////////



      $domain=$url;

$domain=str_replace('https://','',$domain);
$domain=str_replace('http://','',$domain);
$domain=str_replace('/','',$domain);



      $ip = gethostbyname($domain);
      
      
      $A = dns_get_record($domain, DNS_A);
      $AAAA = dns_get_record($domain, DNS_AAAA);
      $CNAME = dns_get_record($domain, DNS_CNAME);
      $CAA = dns_get_record($domain, DNS_CAA);
      $TXT = dns_get_record($domain, DNS_TXT);
      $MX = dns_get_record($domain, DNS_MX);
      $NS = dns_get_record($domain, DNS_NS);




      $Aip = implode(', ', array_column($A, 'ip'));
      $TXTtxt=implode('<br>', array_column($TXT, 'txt'));
      $MXtarget=implode(', ', array_column($MX, 'target'));
      $NStarget=implode(', ', array_column($NS, 'target'));
      $CNAMEtarget=implode(', ', array_column($CNAME, 'target'));
      $CAAvalue=implode(', ', array_column($CAA, 'value'));
      $AAAAipv6=implode(', ', array_column($AAAA, 'ipv6'));
      
      function hostingcustomdomain() {
      global $Aip;
      global $AAAAipv6;
      global $CNAMEtarget;
      global $TXTtxt;
      global $CAAvalue;
      if($Aip == '199.36.158.100'){
          echo '- A records are ok<br>';
      } else {
          echo '<font color="red">- The A records are not correct. The domain name should contain only one A record, pointing to 199.36.158.100 (Playbook URL) - Take a look at the following </font><a href="https://firebase.google.com/docs/hosting/custom-domain#go-live">article.</a> <br>';
      }
      
      if($AAAAipv6 == ''){
          echo '- AAAA records not detected - ok<br>';
      } else {
          echo '<font color="red">- AAAA records detected. The domain name should not contain any AAAA records (Playbook URL)</font> <br>';
      }
      
      if($CNAMEtarget == ''){
          echo '- CNAME records not detected - ok<br>';
      } else {
          echo '<font color="red">- CNAME records detected. The domain name should not contain any CNAME records (Playbook record)</font> <br>';
      }
      
      if(strpos($TXTtxt, 'google-site-verification=') !== false){
      echo '- Domain name seem to contain verificartion TXT record - ok <br>'. $TXTtxt.'<br>';
      } else {
      
      
      echo '<font color="red">- Domain name does not contain verification TXT record. Please take a look at the following </font><a href="https://firebase.google.com/docs/hosting/custom-domain#verify-domain-ownership"> article</a><br>';
      
      }
      
      
      if($CAAvalue == ''){
          echo '- CAA records not found - ok<br>';
      }
      elseif($CAAvalue == 'letsencrypt.org, pki.goog'){
          echo '- Domain contains both letsencrypt.org, pki.goog  - ok<br>';
      }
       else {
          echo '<font color="red">- CAA records problem detected. Either delete completely the CAA records from your domain name or add the following 2 records letsencrypt.org and pki.goog.<br>For more information please take a look at the following</font> <a href="https://firebase.google.com/docs/hosting/custom-domain#status-descriptions">article</a>.';
      }
      
      
}

//////////////////////////////Deceptive function//////////////////////////////

function deceptive() {
      global $domain;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://safebrowsing.googleapis.com/v4/threatMatches:find?key=KEYXXXX",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '  {
"client": {
  "clientId":      "Brinias",
  "clientVersion": "1.5.2"
},
"threatInfo": {
  "threatTypes":      ["MALWARE", "SOCIAL_ENGINEERING"],
  "platformTypes":    ["WINDOWS"],
  "threatEntryTypes": ["URL"],
  "threatEntries": [
    {"url": "'.$domain.'"},
   


  ]
}
  }',
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: b05b8d34-85f2-49cf-0f8e-03686a71e4e9"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 // echo $response;

  //$json = json_decode($response, true);
 // print_r($json);

 //$lol= implode(',', $json[0]);

 //echo $json;

 echo str_replace("{}","The domain name is not marked as deceptive.",$response);

}

}



/////////////////////////cli function///////////////////////////

function cli() {
      global $domain;

      echo file_get_contents('https://'.$domain.'/');


}
      
      ?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>

<body>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Main')">Main</button>
  <button class="tablinks" onclick="openCity(event, 'Analysis')">Analysis</button>
  <button class="tablinks" onclick="openCity(event, 'Suggestions')">Suggestions</button>
</div>
<?php
      
//////////////////////////////////////////////end of function//////////////////////



/////////////////////////Main////////////////////////////////////////////////////
echo '<div id="Main" class="tabcontent">';
////////////////verification_ssl//////////////
if ($verification_ssl==1){

      echo "<br><h3>What to check:</h3>";

      echo implode("<hr>",$playbookssl);


}

////////////////////////////deceptive/////////////////////

if ($deceptive==1){

      echo "<br><h3>What to check:</h3>";

      echo implode("<hr>",$playbookdec);


}

//////////////////domain_another_project/////////

if ($domain_another_project==1){

      echo "<br><h3>What to check:</h3>";

      echo implode("<hr>",$playbookanother);


}

///////////////////////////////cli////////////////////////


if ($cli==1){

      echo "<br><h3>What to check:</h3>";

      echo implode("<hr>",$playbookcli);


}

/////////////////domain_error_like_404////////////////////

if ($domain_error_like_404==1){

      echo "<br><h3>What to check:</h3>";

      echo implode("<hr>",$playbook404);


}


echo '</div>';


///////////////////////Analysis///////////////////////////////////////////////

echo '<div id="Analysis" class="tabcontent">';

//////////////////////verification_ssl/////////////////

if ($verification_ssl==1 and !empty($url)){
      echo "<H3>Potentional Problems for mentioned domain names </h3>";
      foreach ($result[0] as $url)
      {
      
            echo "<h3>".$url.":</h3>";
            hostingcustomdomain();

            echo "<h3>DNS Lookup</h3><B>A RECORD -></B>  ";


print_r($Aip)." ";
echo "<BR><b> AAAA RECORDS -></b> ";

print_r($AAAAipv6);
echo "<BR><b> CNAME RECORDS -></b>   ";

print_r($CNAMEtarget);
echo "<BR><b> CAA RECORDS -></b>   ";

print_r($CAAvalue);
echo "<BR><b> TXT RECORDS -></b>   ";

print_r($TXTtxt);
echo "<BR><br><b> MX RECORDS -></b>   ";


print_r($MXtarget);
echo "<BR><b> NS RECORDS -></b>   ";

print_r($NStarget);
     
}}

//////////deceptive/////////////////////////

elseif ($deceptive==1 and !empty($url)){
      echo "<H3>Safe browsing analysis for mentioned domain names </h3>";
      foreach ($result[0] as $url)
      {
            deceptive();
      }
}


//////////domain_another_project/////////////////////////

elseif ($domain_another_project==1 and !empty($url)){
      echo "<H3>In this point we will need to integrate with GA</h3>";
      
}

////////////////////////////cli////////////////////////////

elseif ($cli==1 and !empty($url)){
      echo "<b>Not available for this type of issue</b>";
      foreach ($result[0] as $url)
      {

//echo '<embed src="https://'.$domain.'">';

} 
}

////////////////////domain_error_like_404//////////////////////
elseif ($domain_error_like_404==1 and !empty($url)){
 
  echo "<H3>Potentional Problems for mentioned domain names </h3>";
      foreach ($result[0] as $url)
      {
      
            echo "<h3>".$url.":</h3>";
            hostingcustomdomain();

            echo "<h3>DNS Lookup</h3><B>A RECORD -></B>  ";


print_r($Aip)." ";
echo "<BR><b> AAAA RECORDS -></b> ";

print_r($AAAAipv6);
echo "<BR><b> CNAME RECORDS -></b>   ";

print_r($CNAMEtarget);
echo "<BR><b> CAA RECORDS -></b>   ";

print_r($CAAvalue);
echo "<BR><b> TXT RECORDS -></b>   ";

print_r($TXTtxt);
echo "<BR><br><b> MX RECORDS -></b>   ";


print_r($MXtarget);
echo "<BR><b> NS RECORDS -></b>   ";

print_r($NStarget);
     
}}


else{
      echo "No domain names provided in the description. Please add a domain name in the description for domain name Analysis";
}


      
echo '</div>';

//////////////////////////////////Suggestions////////////////////////////////

echo '<div id="Suggestions" class="tabcontent">';

/////////////////////veification_ssl//////////////////

if ($verification_ssl==1){
      echo "<br><h3>How to structure a reply (examples):</h3>";

      echo implode("<hr>",$sugssl);


}

////////////////deceptive/////////////////////////////

if ($deceptive==1){
      echo "<br><h3>How to structure a reply (examples):</h3>";

    
      echo implode("<hr>",$sugdec);

}

/////////////////////domain_another_project//////////////


if ($domain_another_project==1){
      echo "<br><h3>How to structure a reply (examples):</h3>";

      echo implode("<hr>",$suganother);


}


///////////////////////cli///////////////////////////

if ($cli==1){
      echo "<br><h3>How to structure a reply (examples):</h3>";

      echo implode("<hr>",$sugcli);


}

/////////////////////domain_error_like_404//////////////

if ($domain_error_like_404==1){
      echo "<br><h3>How to structure a reply (examples):</h3>";

      echo implode("<hr>",$sug404);


}

echo '</div>';



echo '<div id="" class="tabcontent">';


echo '</div>';


?>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

