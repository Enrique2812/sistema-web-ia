<?php

$servername = "localhost"; // Nombre del servidor o dirección IP
$username = "root"; // Nombre de usuario de la base de datos
$password = "MYsqlee"; // Contraseña del usuario
$dbname = "sistema_citas"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// echo "Conexión exitosa";

// Cerrar la conexión