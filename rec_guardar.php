<?php 
include("config.php");
$nombre_recinto = $_POST['nombre_recinto'];
$descripcion = $_POST['descripcion'];
$capacidad = $_POST['capacidad'];
$tipo_habitad = $_POST['tipo_habitad'];


$sql = "INSERT INTO tb_recinto(nombre_recinto,descripcion,capacidad,tipo_habitad) 
VALUES('$nombre_recinto','$descripcion','$capacidad','$tipo_habitad')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="recinto.php";';
	echo '</script>';	
}
?>