<?php
require_once("../_db.php");
$correo = $_POST['correo'];
$password = $_POST['password'];
session_start();
$_SESSION['correo'] = $correo;

$conexion = mysqli_connect("localhost", "root", "", "sincronias");
$consulta = "SELECT * FROM user WHERE correo='$correo' AND password='$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    header('Location: ../../views/usuarios/index.php');
} else {
    $email = $correo;
    // Verificar en la tabla "usuarios"
    $consultaUsuarios = "SELECT * FROM usuarios WHERE email='$email'";
    $resultadoUsuarios = mysqli_query($conexion, $consultaUsuarios);
    $filasUsuarios = mysqli_num_rows($resultadoUsuarios);

    if ($filasUsuarios) {
        header('Location: /index.php');
    } else {
        header('Location: /login_error.php'); // Redirige a una página de error de inicio de sesión
        session_destroy();
    }
}

mysqli_close($conexion);
?>
