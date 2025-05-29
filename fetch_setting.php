<?php
include "partials/_dbconnect.php";

$statusQuery = "SELECT setting_value FROM settings WHERE setting_key = 'show_brochure'";
$statusResult = mysqli_query($conn, $statusQuery);

if ($statusResult) {
    $statusRow = mysqli_fetch_assoc($statusResult);
    $displayEnabled = $statusRow['setting_value'] === 'true'; // Convert to boolean
    echo json_encode(['show_brochure' => $displayEnabled]);
} else {
    echo json_encode(['show_brochure' => false]);
}
?>