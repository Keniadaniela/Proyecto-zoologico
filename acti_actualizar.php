<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre_actividad = $_POST['nombre_actividad'];
$descripcion = $_POST['descripcion'];
$fecha_hora= $_POST['fecha_hora'];
$duracion = $_POST['duracion'];
$costo = $_POST['costo'];
$capacidad_max_participantes = $_POST['capacidad_max_participantes'];
$estado = $_POST['estado'];
// SQL para la actualización de datos
$sql = "UPDATE tb_actividades
        SET 
        nombre_actividad ='$nombre_actividad',
        descripcion ='$descripcion',
        fecha_hora ='$fecha_hora',
        duracion ='$duracion',
        costo ='$costo',
        capacidad_max_participantes='$capacidad_max_participantes'
          
        WHERE id_actividades = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "actividades.php";';
    echo '</script>';
}
?>