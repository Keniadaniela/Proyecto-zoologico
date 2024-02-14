<?php 
include("config.php");
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO tb_animales(nombre,especie,edad,genero,fecha_nacimiento) 
VALUES('$nombre','$especie','$edad','$genero','$fecha_nacimiento')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="animales.php";';
	echo '</script>';	
}
?>