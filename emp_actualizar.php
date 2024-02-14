<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];


// SQL para la actualización de datos
$sql = "UPDATE tb_tipoempleado
        SET 
        descripcion ='$descripcion',
          
            
        WHERE id_tipoempleado = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "empleado.php";';
    echo '</script>';
}
?>