<?php
// Incluir el archivo de conexión a la base de datos
require_once 'conexion.php';

// Variables para mensajes de éxito y error
$mensajeExito = $mensajeError = '';

// Procesar el formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO comentario (usuario, email, mensaje) VALUES ('$usuario', '$email', '$mensaje')";

    if ($conexion->query($sql) === TRUE) {
        $mensajeExito = "Registro Exitoso del comentario.";
    } else {
        $mensajeError = "Error al registrar el comentario: " . $conexion->error;
    }
}
?>

<div class="container">
    <?php if (!empty($mensajeExito)) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $mensajeExito; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($mensajeError)) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $mensajeError; ?>
        </div>
    <?php endif; ?>

    <a href="index.php" class="btn btn-secondary">Volver al inicio</a>
</div>
