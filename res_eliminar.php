<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_reservacion SET estado = 0
WHERE id_reservacion = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="reservacion.php";';
	echo '</script>';
	
}
?>