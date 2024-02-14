<?php 
include("config.php");
$limite_acceso = $_POST['limite_acceso'];
$personal_autorizado = $_POST['personal_autorizado'];



$sql = "INSERT INTO tb_zona_restrinccion(limite_acceso,personal_autorizado) 
VALUES('$limite_acceso','$personal_autorizado')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="zona.php";';
	echo '</script>';	
}
?>