<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre_recinto = $_POST['nombre_recinto'];
$descripcion= $_POST['descripcion'];
$capacidad = $_POST['capacidad'];
$tipo_habitad = $_POST['tipo_habitad'];


// SQL para la actualización de datos
$sql = "UPDATE tb_recinto
        SET 
        nombre_recinto ='$nombre_recinto',
        descripcion ='$descripcion',
        capacidad ='$capacidad',
        tipo_habitad ='$tipo_habitad',
           
            
        WHERE id_recinto = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "recinto.php";';
    echo '</script>';
}
?>