<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca_inter";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
