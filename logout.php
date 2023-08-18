<?php
session_start();

// Mensaje para notificar que la sesión ha sido cerrada con éxito
$_SESSION['logout_message'] = 'Sesión cerrada con éxito';

// Destruir la sesión y redirigir al formulario de login de sesión
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>
