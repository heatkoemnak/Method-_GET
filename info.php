<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hdsd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT NAME, EMAIL FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["NAME"]. " - Email: " . $row["EMAIL"].   "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
