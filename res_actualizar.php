<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$fecha_reservacion= $_POST['fecha_reservacion'];
$cantidad_personas = $_POST['cantidad_personas'];
$valor = $_POST['valor'];


// SQL para la actualización de datos
$sql = "UPDATE tb_actividades
        SET 
        fecha_reservacion ='$fecha_reservacion',
        cantidad_personas ='$cantidad_personas',
        valor  ='$valor ',
            
        WHERE id_reservacion = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios

 if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "reservacion.php";';
    echo '</script>';
}
?>