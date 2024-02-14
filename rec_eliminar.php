<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_recinto SET estado = 0
WHERE id_recinto = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="recinto.php";';
	echo '</script>';
	
}
?>