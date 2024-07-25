<?php
include 'db.php';

$sql = "SELECT * FROM urls";
$result = $conn->query($sql);

$urls = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $urls[] = $row;
    }
}

echo json_encode($urls);

$conn->close();
?>