<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_tienda_regalos SET estado = 0
WHERE id_tienda_regalos = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="regalos.php";';
	echo '</script>';
	
}
?>