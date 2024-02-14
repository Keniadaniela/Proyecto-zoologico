<?php 
include("config.php");
$nom_juguete = $_POST['nom_juguete'];
$descripcion = $_POST['descripcion'];
$valor= $_POST['valor'];



$sql = "INSERT INTO tb_tienda_regalos(nom_juguete,descripcion,valor) 
VALUES('$nom_juguete','$descripcion','$valor')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="regalos.php";';
	echo '</script>';	
}
?>