<?php
include 'db.php';

$sql = "
    SELECT 
        urls.short_id,
        urls.long_url,
        COUNT(clicks.id) AS click_count
    FROM urls
    LEFT JOIN clicks ON urls.short_id = clicks.short_id
    GROUP BY urls.short_id, urls.long_url
";

$result = $conn->query($sql);

$stats = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $stats[] = $row;
    }
}

echo json_encode($stats);

$conn->close();
?>
