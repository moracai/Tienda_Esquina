<?php
$servidor = "localhost"; 
$usuario = "root"; 
$contraseña = ""; 
$nombre_base_datos ="tienda_esquina";
$conn = new mysqli($servidor, $usuario, $contraseña, $nombre_base_datos);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
echo "Conexión exitosa";
}
?>