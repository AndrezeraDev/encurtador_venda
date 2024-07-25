<?php
$servername = "localhost"; // Ou o hostname do banco de dados no cPanel
$username = "vend3021_url_shortener"; // Atualize com o nome do usuário do banco de dados
$password = "Vendaseguro001"; // Atualize com a senha do banco de dados
$dbname = "url_shortener"; // Atualize com o nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>