<?php 
$string="welcome to agriculture";
echo strlen($string);
echo strrev($string);
echo strpos($string);
echo strtoupper($string);

//question n4 b
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "IBMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//question mo5 bpaart
$sql = "SELECT name FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"]. " "<br>";
  }
} 

$conn->close();
?>