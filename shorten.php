<?php
include 'db.php';

$data = json_decode(file_get_contents('php://input'), true);
$longUrl = $data['url'];
$shortId = substr(md5(uniqid()), 0, 6);

$sql = "INSERT INTO urls (long_url, short_id) VALUES ('$longUrl', '$shortId')";

if ($conn->query($sql) === TRUE) {
    $shortUrl = "https://thabata.link/" . $shortId; // Atualize para o domínio real
    echo json_encode(['shortUrl' => $shortUrl]);
} else {
    echo json_encode(['error' => 'Erro ao encurtar a URL']);
}

$conn->close();
?>
