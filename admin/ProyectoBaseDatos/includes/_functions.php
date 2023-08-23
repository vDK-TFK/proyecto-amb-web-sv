<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_producto':
            eliminar_producto();

        break;        
        case 'editar_producto':
        editar_producto();

        break;

        case 'insertar_productos':
        insertar_productos();

        break;    
    }

}
function insertar_productos(){
    global $conexion;
    extract($_POST);

    // Variables donde se almacenan los valores de nuestra imagen
    $tamanoArchivo = $_FILES['foto']['size'];
    
    // Se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);   
    
    // Se realiza la consulta correspondiente para guardar los datos
    $imagenFin = mysqli_escape_string($conexion, $binariosImagen);

    // Determinar la tabla y categoría en función de la categoría proporcionada
    $tabla = '';
    switch ($categorias) {
        case 'Mujer':
            $tabla = 'pro_mujer';
            break;
        case 'Hombre':
            $tabla = 'pro_hombre';
            break;
        case 'Niños':
            $tabla = 'pro_niño';
            break;
        default:
            // Puedes manejar un caso por defecto si la categoría no es ninguna de las anteriores
            break;
    }

    if (!empty($tabla)) {
        $consulta = "INSERT INTO $tabla (nombre, descripcion, color, precio, cantidad, cantidad_min, categorias, imagen)
                     VALUES ('$nombre', '$descripcion', '$color', $precio, $cantidad, $cantidad_min, '$categorias', '$imagenFin');";
        
        mysqli_query($conexion, $consulta);
        header("Location: ../views/usuarios/");
    } else {
        // Aquí puedes manejar un caso en el que la categoría no sea válida
        echo "Categoría no válida.";
    }
}


function editar_producto(){
    global $conexion;
    extract($_POST);


    // Variables donde se almacenan los valores de nuestra imagen
    $tamanoArchivo = $_FILES['foto']['size'];
    
    // Se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);   
    
    // Se realiza la consulta correspondiente para guardar los datos
    $imagenFin = mysqli_escape_string($conexion, $binariosImagen);

    // Determinar la tabla y categoría en función de la categoría proporcionada
    $tabla = '';
    switch ($categorias) {
        case 'Mujer':
            $tabla = 'pro_mujer';
            break;
        case 'Hombre':
            $tabla = 'pro_hombre';
            break;
        case 'Niños':
            $tabla = 'pro_niño';
            break;
        default:
            // Puedes manejar un caso por defecto si la categoría no es ninguna de las anteriores
            break;
    }

    if (!empty($tabla)) {
        $consulta = "UPDATE $tabla SET nombre = '$nombre', descripcion = '$descripcion', color = '$color', precio = '$precio', cantidad = '$cantidad', categorias = '$categorias', imagen = '$imagenFin' WHERE id = $id";
        
        mysqli_query($conexion, $consulta);
        header("Location: ../views/usuarios/");
    } else {
        // Aquí puedes manejar un caso en el que la categoría no sea válida
        echo "Categoría no válida.";
    }
}

function eliminar_producto(){
    global $conexion;
    extract($_POST);
    
    $categorias = $_POST['categorias'];

    
    // Determinar la tabla en función de la categoría proporcionada
    $tabla = '';
    switch ($categorias) {
        case 'Mujer':
            $tabla = 'pro_mujer';
            break;
        case 'Hombre':
            $tabla = 'pro_hombre';
            break;
        case 'Niños':
            $tabla = 'pro_niño';
            break;
        default:
            // Puedes manejar un caso por defecto si la categoría no es ninguna de las anteriores
            break;
    }

    if (!empty($tabla)) {
        $consulta = "DELETE FROM $tabla WHERE id = $id";
        mysqli_query($conexion, $consulta);
        header("Location: ../views/usuarios/");
    } else {
        // Aquí puedes manejar un caso en el que la categoría no sea válida
        echo "Categoría no válida.";
    }
}

?>