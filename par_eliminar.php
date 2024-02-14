<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_parqueadero SET estado = 0
WHERE id_parqueadero = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="parqueadero.php";';
	echo '</script>';
	
}
?>