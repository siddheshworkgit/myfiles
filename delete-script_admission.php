<?php
include "partials/_dbconnect.php";
include_once "Common_admission.php";
if (isset($_GET['recordId'])) {
    $recordId = $_GET['recordId'];
    $common = new Common();
    $delete = $common->deleteRecordById($conn, $recordId);
    if ($delete) {
        echo '<script>alert("Record deleted successfully !")</script>';
        echo '<script>window.location.href="scholership_pg-notf.php";</script>';
    }
}
