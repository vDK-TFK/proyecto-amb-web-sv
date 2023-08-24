<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <!-- Agregar la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Registro de Usuario</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label for="address">Dirección:</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
            <a href="login.php" class="btn btn-secondary">Volver</a>

        </form>
    </div>

    <!-- Agregar la referencia a Bootstrap JS y jQuery (opcional) para mejorar ciertas funcionalidades -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
