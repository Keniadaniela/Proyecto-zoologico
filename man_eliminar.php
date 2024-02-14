<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_mantenimiento_areas SET estado = 0
WHERE id_mantenimient_areas = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="mantenimiento.php";';
	echo '</script>';
	
}
?>