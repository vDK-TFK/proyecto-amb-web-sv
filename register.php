<?php
// Incluir el archivo de conexión a la base de datos
require_once 'conexion.php';

// Variables para mensajes de éxito y error
$mensajeExito = $mensajeError = '';

// Procesar el formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // Encriptar la contraseña con la funsion HASH
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO usuarios (usuario, email, password, phone, address) VALUES ('$usuario', '$email', '$password', '$phone', '$address')";

    if ($conexion->query($sql) === TRUE) {
        $mensajeExito = "Registro Exitoso del Usuario.";
    } else {
        $mensajeError = "Error al registrar el Usuario: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
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

    <a href="login.php" ><button class="btn btn-success orderBtn">Volver al login</button></a>
</div>
</body>
</html>
