<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre  = $_POST['nombre'];
$edad = $_POST['edad'];
$tipo  = $_POST['tipo'];

// SQL para la actualización de datos
$sql = "UPDATE tb_especies_extincion
        SET 
        nombre ='$nombre',
        edad   ='$edad',
        tipo ='$tipo',
        
        WHERE id_especie_extincion = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location = "especies_extincion.php";';
    echo '</script>';
}
?>