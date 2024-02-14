<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$dias_atencion = $_POST['dias_atencion'];
$hora_atencion = $_POST['hora_atencion'];

// SQL para la actualización de datos
$sql = "UPDATE tb_horario_atencion
        SET 
        dias_atencion ='$dias_atencion',
        hora_atencion ='$hora_atencion',
            
        WHERE id_horario_atencion = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "horario.php";';
    echo '</script>';
}
?>