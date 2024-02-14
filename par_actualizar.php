<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$num_bloque = $_POST['num_bloque'];
$tipo_vehiculo = $_POST['tipo_vehiculo'];

// SQL para la actualización de datos
$sql = "UPDATE tb_parqueadero
        SET 
        num_bloque ='$num_bloque',
        tipo_vehiculo ='$tipo_vehiculo',
            
        WHERE id_parqueadero = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "parqueadero.php";';
    echo '</script>';
}
?>