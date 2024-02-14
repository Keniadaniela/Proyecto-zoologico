<?php 
include("config.php");
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$fecha_contrato = $_POST['fecha_contrato'];
$salario = $_POST['salario'];
$horario_laboral = $_POST['horario_laboral'];
$especializacion = $_POST['especializacion'];


$sql = "INSERT INTO tb_personal(nombre,cargo,fecha_contrato,salario,horario_laboral,especializacion) 
VALUES('$nombre','$cargo','$fecha_contrato','$salario','$horario_laboral','$especializacion')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="personal.php";';
	echo '</script>';	
}
?>