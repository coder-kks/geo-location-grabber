

<?php 



$myfile = fopen("info.txt", "w") or die("Unable to open file!");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fclose($myfile);





$mysqli = new mysqli($dbhost,$dbuser,$pwd,$name);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$lat = $_GET["lat"];
$long = $_GET["long"];
$ip = $_SERVER["REMOTE_ADDR"];
 $sql = "INSERT INTO tablename (lat,long,ip)
VALUES ('$lat', '$long', '$ip')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$conn->close();


