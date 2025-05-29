<?php
session_start();
if (!isset($_SESSION['loggedinwbm']) || $_SESSION['loggedinwbm'] != true) {
    header("location: wbmlogin.php");
    exit;
}

?>
<?php
include "partials/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['toggleSetting'])) {
    // Fetch current setting value
    $statusQuery = "SELECT setting_value FROM settings WHERE setting_key = 'show_brochure'";
    $statusResult = mysqli_query($conn, $statusQuery);

    if ($statusResult) {
        $statusRow = mysqli_fetch_assoc($statusResult);
        $currentValue = $statusRow['setting_value'];

        // Toggle the value
        $newValue = $currentValue === 'true' ? 'false' : 'true';

        // Update the database with the new value
        $updateQuery = "UPDATE settings SET setting_value = '$newValue' WHERE setting_key = 'show_brochure'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            echo "Setting toggled successfully to $newValue";
        } else {
            echo "Failed to update setting";
        }
    } else {
        echo "Failed to fetch setting";
    }

    // Redirect back to the HTML page
    header("Location: webmaster.php");
    exit();
} else {
    echo "Invalid request";
}
?>
