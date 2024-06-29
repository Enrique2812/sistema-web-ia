<?php
// Procesamiento del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];

    // Preparar la consulta SQL para buscar al paciente por DNI
    $sql = "SELECT * FROM paciente WHERE dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Si se encuentra el paciente, devolver los datos como JSON
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        // Si no se encuentra el paciente, devolver un arreglo vacío
        echo json_encode(array());
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conn->close();
}