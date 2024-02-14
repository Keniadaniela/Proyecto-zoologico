<?php 
include("config.php");
$num_bloque = $_POST['num_bloque'];
$tipo_vehiculo = $_POST['tipo_vehiculo'];

$sql = "INSERT INTO tb_parqueadero(num_bloque,tipo_vehiculo) 
VALUES('$num_bloque','$tipo_vehiculo')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="parqueadero.php";';
	echo '</script>';	
}
?>