
<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

// SQL para la actualización de datos
$sql = "UPDATE tb_animales
        SET 
            nombre ='$nombre',
            especie ='$especie',
            edad ='$edad',
            genero ='$genero',
            fecha_nacimiento='$fecha_nacimiento'
            
        WHERE id_animales = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "animales.php";';
    echo '</script>';
}
?>