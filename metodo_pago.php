<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title >Formulario de Pagos</title>
</head>
<body>
    <h1 style="position: relative; left: 40%; ">Formulario de Pagos</h1>
    <div style="position:absolute; width: 500px; left: 680px">
    <form method="post" action="procesar_formulario.php">
        <label for="nombre">Nombre:</label>
        <label for=""> </label>
        <input type="text" class="form-control" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" class="form-control" id="correo" name="correo" required><br><br>

        <label for="numero_cuenta">Número de Cuenta:</label>
        <input type="text" class="form-control" id="numero_cuenta" name="numero_cuenta" required><br><br>

        <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
        <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required><br><br>

        <label for="titular">Titular:</label>
        <input type="text" class="form-control" id="titular" name="titular" required><br><br>

       <input type="submit" value="Enviar">
    </form>
    </div>
    
</body>
</html>
