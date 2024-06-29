<?php

$servername = "localhost"; // Nombre del servidor o dirección IP
$username = "alcorpsc_wc"; // Nombre de usuario de la base de datos
$password = "kmSEpp^]rxS1"; // Contraseña del usuario
$dbname = "alcorpsc_citas_medicas"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    echo "hola error";
    die("Conexión fallida: " . $conn->connect_error);
}
//echo "Conexión exitosa";

// Cerrar la conexión