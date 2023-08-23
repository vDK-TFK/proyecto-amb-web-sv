<?php
// Conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de MySQL no está en localhost
$username = "root";
$password = "";
$dbname = "sincronias";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recoge los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$numero_cuenta = $_POST['numero_cuenta'];
$fecha_vencimiento = $_POST['fecha_vencimiento'];
$titular = $_POST['titular'];

// Inserta los datos en la tabla "pagos"
$sql = "INSERT INTO pagos (nombre, apellidos, direccion, correo, numero_cuenta, fecha_vencimiento, titular)
        VALUES ('$nombre', '$apellidos', '$direccion', '$correo', '$numero_cuenta', '$fecha_vencimiento', '$titular')";

if ($conn->query($sql) === TRUE) {
    echo "";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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
<a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Continuar<i class="glyphicon glyphicon-menu-right"></i></a>
</body>
</html>