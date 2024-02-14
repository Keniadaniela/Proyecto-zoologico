<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nom_juguete = $_POST['nom_juguete'];
$descripcion= $_POST['descripcion'];
$valor = $_POST['valor'];



// SQL para la actualización de datos
$sql = "UPDATE tb_tienda_regalos
        SET 
        nom_juguete ='$nom_juguete',
        descripcion ='$descripcion',
        valor ='$valor',
       
           
            
        WHERE id_tienda_regalos = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "regalos.php";';
    echo '</script>';
}
?>