<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$limite_acceso = $_POST['limite_acceso'];
$personal_autorizado = $_POST['personal_autorizado'];

// SQL para la actualización de datos
$sql = "UPDATE tb_zona_restrinccion
        SET 
        limite_acceso ='$limite_acceso',
        personal_autorizado ='$personal_autorizado',
       
            
        WHERE id_zona_restrinccion = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "zona.php";';
    echo '</script>';
}
?>