<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre = $_POST['precio'];
$especie = $_POST['fecha_compra'];
$edad = $_POST['tipo_boleto'];


// SQL para la actualización de datos
$sql = "UPDATE tb_boletos
        SET 
            precio ='$precio',
            fecha_compra ='$fecha_compra',
           tipo_boleto ='$ tipo_boleto',
          id_visitantes ='$id_visitantes',
            
        WHERE id_boletos = $id";



// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "boletos.php";';
    echo '</script>';
}
?>