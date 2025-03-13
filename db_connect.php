<?php
$host = "localhost";
$user = "admin";
$pass = "admin";
$dbname = "restaurante";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
