<?php 
include("config.php");
$fecha_reservacion = $_POST['fecha_reservacion'];
$cantidad_personas = $_POST['cantidad_personas'];
$valor = $_POST['valor'];


$sql = "INSERT INTO tb_reservacion(fecha_reservacion,cantidad_personas,valor) 
VALUES('$fecha_reservacion','$cantidad_personas','$valor')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="reservacion.php";';
	echo '</script>';	
}
?>