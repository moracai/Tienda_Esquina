<?php

require_once 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_completo = $_POST['nombre completo'];
    $direccion = $_POST['direccion'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $numero_celular = $_POST['numero de celular'];
    $correo_electronico = $_POST['correo electronico'];
    $contrasena = $_POST['contrasena'];
    
    $contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO usuarios (nombre_completo, direccion, tipo_documento, numero_documento, numero_celular, correo_electronico, contrasena) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nombre_completo, $direccion, $tipo_documento, $numero_documento, $numero_celular, $correo_electronico, $contrasena_hash);
    
    if ($stmt->execute()) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
