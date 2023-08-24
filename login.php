<?php
require_once 'conexion.php';

// Mensajes de error y éxito
$logout_message = '';
$error_message = '';

if (isset($_SESSION['logout_message'])) {
    $logout_message = $_SESSION['logout_message'];
    unset($_SESSION['logout_message']);
}

// Procesar el formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar las credenciales para usuarios normales
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conexion->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Inicio de sesión exitoso para usuarios normales
            session_start();
            $_SESSION['sessCustomerID'] = $user['id']; // Configura la ID del usuario autenticado en la sesión
            header('Location: index.php');
            exit;
        } else {
            $error_message = "Contraseña incorrecta.";
        }
    } else {
        // Si no se encontró el usuario en la tabla "usuarios", verificar en la tabla "admin"
        $sql_admin = "SELECT * FROM user WHERE correo = '$email' AND password = '$password'";
        $result_admin = $conexion->query($sql_admin);

        if ($result_admin->num_rows === 1) {
            // Inicio de sesión exitoso para administradores
            session_start();
            $_SESSION['sessCustomerID'] = 'admin'; // Configura una identificación especial para administradores, si es necesario
            header('Location: admin/ProyectoBaseDatos/index.php');
            exit;
        } else {
            $error_message = "Usuario no encontrado o contraseña incorrecta.";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <!-- Con Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <h2>Iniciar sesión</h2>
        <?php if ($error_message !== ''): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Ingrese su Correo:</label>
                <input type="email" class="form-control <?php if ($error_message !== '') echo 'is-invalid'; ?>" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control <?php if ($error_message !== '') echo 'is-invalid'; ?>" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-success">Iniciar sesión</button>
        </form><br>

        <form action="new_user.php" method="post">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>

    <!-- Agregar Bootstrap JS and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
