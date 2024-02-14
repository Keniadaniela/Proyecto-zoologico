<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_patio_comida SET estado = 0
WHERE id_patio_comida = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="patiodecomida.php";';
	echo '</script>';
	
}
?>