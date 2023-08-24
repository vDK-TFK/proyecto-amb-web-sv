<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'eliminar_proveedor':
            eliminar_producto();

        break;        
        case 'editar_proveedor':
        editar_producto();

        break;

        case 'insertar_proveedor':
        insertar_productos();

        break;    
    }

}

function insertar_productos(){

    global $conexion;
    extract($_POST);


    //     //variables donde se almacenan los valores de nuestra imagen
    //             $tamanoArchvio=$_FILES['foto']['size'];
    
    //     //se realiza la lectura de la imagen
    //             $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
    //             $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
    //     //se realiza la consulta correspondiente para guardar los datos
        
    //     $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                


    $consulta="INSERT INTO proveedores (nombre, ubicacion, productos, cantidad, fecha)
    VALUES ('$nombre', '$ubicacion', '$productos', $cantidad, '$fecha');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/indexProveedor.php");

}
function editar_producto(){

    global $conexion;
    extract($_POST);


    //     //variables donde se almacenan los valores de nuestra imagen
    //             $tamanoArchvio=$_FILES['foto']['size'];
    //     //se realiza la lectura de la imagen
    //             $imagenSubida=fopen($_FILES['foto']['tmp_name'], 'r');
    //             $binariosImagen=fread($imagenSubida,$tamanoArchvio);   
    //     //se realiza la consulta correspondiente para guardar los datos
        
    //     $imagenFin =mysqli_escape_string($conexion,$binariosImagen);
                
    $consulta="UPDATE proveedores SET nombre = '$nombre', ubicacion = '$ubicacion', productos = '$productos', cantidad = $cantidad, fecha = '$fecha' WHERE id = $id";

    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/indexProveedor.php");
}
function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM proveedores WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/indexProveedor.php");
}
?>