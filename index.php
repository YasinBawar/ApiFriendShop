<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT * FROM sldier";

$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}

echo json_encode($data);

$conn->close();
?>
