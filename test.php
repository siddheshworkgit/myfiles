<style>
    .table_lab{
        width: 61.7427%;
    }
</style>
<?php
include 'partials/_dbconnect.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch lab_name and incharge where deptname is 'computer science'
$sql = "SELECT lab_name, incharge FROM labs WHERE deptname = 'computer science'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table class='table_lab' border='1';>";
    echo "<tr><th>Lab Name</th><th>Incharge</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["lab_name"]. "</td><td>" . $row["incharge"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
