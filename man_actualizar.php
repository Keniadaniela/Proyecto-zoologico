<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre= $_POST['nombre'];
$fecha = $_POST['fecha'];
$valor_mantenimientos = $_POST['valor_mantenimientos'];
$id_recinto= $_POST['id_recinto'];


// SQL para la actualización de datos
$sql = "UPDATE tb_mantenimiento_areas
        SET 
        nombre ='$nombre',
        fecha ='$fecha',
        valor_mantenimientos ='$valor_mantenimientos',
        id_recinto ='$id_recinto',
       
            
        WHERE id_mantenimient_areas = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "mantenimiento.php";';
    echo '</script>';
}
?>