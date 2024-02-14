<?php 
include("config.php");
$precio= $_POST['precio'];
$fecha_compra= $_POST['fecha_compra'];
$tipo_boleto = $_POST['tipo_boleto'];
$id_visitantes = $_POST['id_visitantes'];


$sql = "INSERT INTO tb_actividades(precio,fecha_compra,tipo_boleto,id_visitantes) 
VALUES('$precio','$fecha_compra','$tipo_boleto','$id_visitantes)";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="boletos.php";';
	echo '</script>';	
}
?>