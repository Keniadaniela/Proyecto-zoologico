<?php 
include("config.php");
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$tipo = $_POST['tipo'];


$sql = "INSERT INTO tb_especies_extincion(nombre,edad,tipo) 
VALUES('$nombre','$edad','$tipo')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="especies_extincion.php";';
	echo '</script>';	
}
?>