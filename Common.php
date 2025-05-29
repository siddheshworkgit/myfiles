<?php
class Common
{
    public function getAllRecords($conn) {
        $query = "SELECT * FROM noticebrd WHERE type = 'homepage' ";
        $result = $conn->query($query) or die("Error in query1".$conn->error);
        return $result;
    }

    public function deleteRecordById($conn,$recordId) {
        $query = "DELETE FROM noticebrd WHERE id='$recordId' AND type = 'homepage'";
        $result = $conn->query($query) or die("Error in query2".$conn->error);
        return $result;
    }
}
