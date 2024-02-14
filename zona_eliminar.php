<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_zona_restrinccion SET estado = 0
WHERE id_zona_restrinccion = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="zona.php";';
	echo '</script>';
	
}
?>