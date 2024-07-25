<?php
include 'db.php';

$shortId = $_GET['shortId'];

$sqlSelect = "SELECT long_url FROM urls WHERE short_id = '$shortId'";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $longUrl = $row['long_url'];

    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $sqlInsertClick = "INSERT INTO clicks (short_id, user_agent) VALUES ('$shortId', '$userAgent')";
    $conn->query($sqlInsertClick);

    header("Location: $longUrl");
} else {
    echo "URL não encontrada";
}

$conn->close();
?>