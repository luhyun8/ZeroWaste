<?php
$host = "localhost";
$usuario = "root"; // o el usuario que tengas
$contrasena = ""; // si usas XAMPP o WAMP normalmente está en blanco
$bd = "zw"; // el nombre de tu base de datos

$conn = new mysqli($host, $usuario, $contrasena, $bd);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
