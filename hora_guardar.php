<?php 
include("config.php");
$dias_atencion = $_POST['dias_atencion'];
$hora_atencion = $_POST['hora_atencion'];

$sql = "INSERT INTO tb_horario_atencion(dias_atencion,hora_atencion) 
VALUES('$dias_atencion','$hora_atencion')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="horario.php";';
	echo '</script>';	
}
?>