<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_tipoempleado SET estado = 0
WHERE id_tipoempleado = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="empleado.php";';
	echo '</script>';
	
}
?>