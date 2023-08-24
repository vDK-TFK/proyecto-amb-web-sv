<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include '../conexion.php';
// Obtiene los datos del formulario
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];

// Inserta el comentario en la base de datos
$sql = "INSERT INTO comentarios (nombre, comentario) VALUES ('$nombre', '$comentario')";

if ($conexion->query($sql) === TRUE) {
    header('Location: ../index.php');
} else {
    echo "Error al guardar el comentario: " . $conexion->error;
}

// Cierra la conexión a la base de datos
$conexion->close();
?>