<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'partials/_dbconnect.php';

$sql = "SELECT batches.id AS batch_id, batches.batch_name, images.id AS image_id, images.filename
        FROM batches
        LEFT JOIN images ON batches.id = images.batch_id
        ORDER BY batches.id DESC, images.id ASC";
$result = $conn->query($sql);

$batches = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if (!isset($batches[$row["batch_id"]])) {
      $batches[$row["batch_id"]] = array(
        "batch_name" => $row["batch_name"],
        "thumbnail" => $row["filename"], // Use the first image as the default thumbnail
        "images" => array()
      );
    }
    $batches[$row["batch_id"]]["images"][] = $row["filename"];
  }

  // Optionally, select a random image as the thumbnail for each batch
  foreach ($batches as &$batch) {
    $batch["thumbnail"] = $batch["images"][array_rand($batch["images"])];
  }
}

header('Content-Type: application/json');
echo json_encode($batches);

$conn->close();
?>
