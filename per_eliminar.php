<?php 
include("config.php");
$id = $_GET['id'];
$sql ="UPDATE tb_personal SET estado = 0
WHERE id_personal = $id";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'window.location="personal.php";';
	echo '</script>';
	
}
?>