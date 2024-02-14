<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_actividades SET estado = 0
WHERE id_actividades = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="actividades.php";';
	echo '</script>';
	
}
?>