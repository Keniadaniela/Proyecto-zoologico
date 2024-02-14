<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_animales SET estado = 0
WHERE id_animales = $id";
if(mysqli_query($mysqli, $sql)){ //conexion
    echo '<script language="javascript">';
	echo 'window.location="animales.php";';
	echo '</script>';
	
}
?>