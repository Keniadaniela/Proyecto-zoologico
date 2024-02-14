<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_especies_exticion SET estado = 0
WHERE id_especie_extincion = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="especies_extincion.php";';
	echo '</script>';
	
}
?>