<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'partials/_dbconnect.php';


// Fetch images from database
$sql = "SELECT batches.batch_name, images.batch_id, images.filename 
        FROM images 
        JOIN batches ON images.batch_id = batches.id";
$result = $conn->query($sql);

$images = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $images[] = $row;
  }
}

// Return images as JSON
header('Content-Type: application/json');
echo json_encode($images);

$conn->close();
?>
