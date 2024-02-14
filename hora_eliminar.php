<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_horario_atencion SET estado = 0
WHERE id_horario_atencion = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="horario.php";';
	echo '</script>';
	
}
?>