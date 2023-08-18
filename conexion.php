<!-- Sintaxis PHP  - Conexion BD-->
<?php
    // Declaracion de Variables
    $servername = "localhost"; //Servidor local
    $username = "root"; //usuario de la base datos
    $password = "";// Contraseña de la base de datos
    $dbname = "sincronias";//Nombre de la Base de datos

    $conexion = new mysqli($servername, $username, $password, $dbname);

    //condicion de error en la base de datos
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    } else {
        ;
    }
?>


