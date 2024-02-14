<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$especie = $_POST['edad'];
$edad = $_POST['pais_origen'];
$genero = $_POST['fecha_visita'];
$fecha_nacimiento = $_POST['numero_boleto'];

// SQL para la actualización de datos
$sql = "UPDATE tb_visitantes
        SET 
            nombre ='$nombre',
            edad ='$edad',
            pais_origen='$pais_origen',
            fecha_visita='$fecha_visita',
            numero_boleto='$numero_boleto'
            
        WHERE id_visitante = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "visitantes.php";';
    echo '</script>';
}
?>