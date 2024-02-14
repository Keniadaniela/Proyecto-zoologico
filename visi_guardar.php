<?php 
include("config.php");
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$pais_origen = $_POST['pais_origen'];
$fecha_visita = $_POST['fecha_visita'];
$numero_boleto = $_POST['numero_boleto'];

$sql = "INSERT INTO tb_visitantes(nombre,edad,pais_origen,fecha_visita,numero_boleto) 
VALUES('$nombre','$edad','$pais_origen','$fecha_visita','$numero_boleto')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="visitantes.php";';
	echo '</script>';	
}
?>