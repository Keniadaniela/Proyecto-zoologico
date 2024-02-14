<?php 
include("config.php");
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$valor_mantenimientos = $_POST['valor_mantenimientos'];
$id_recinto = $_POST['id_recinto'];


$sql = "INSERT INTO tb_mantenimiento_areas(nombre,fecha,valor_mantenimientos,id_recinto) 
VALUES('$nombre','$fecha','$valor_mantenimientos','$id_recinto')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="mantenimiento.php";';
	echo '</script>';	
}
?>