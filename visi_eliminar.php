<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_visitantes SET estado = 0
WHERE id_visitante = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="visitantes.php";';
	echo '</script>';
	
}
?>