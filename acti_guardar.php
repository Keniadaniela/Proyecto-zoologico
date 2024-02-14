<?php 
include("config.php");
$nombre_actividad = $_POST['nombre_actividad'];
$descripcion = $_POST['descripcion'];
$fecha_hora = $_POST['fecha_hora'];
$duracion = $_POST['duracion'];
$costo = $_POST['costo'];
$capacidad_max_participantes = $_POST['capacidad_max_participantes'];


$sql = "INSERT INTO tb_actividades(nombre_actividad,descripcion,fecha_hora,duracion,costo,capacidad_max_participantes) 
VALUES('$nombre_actividad','$descripcion','$fecha_hora','$duracion','$costo','$capacidad_max_participantes')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="actividades.php";';
	echo '</script>';	
}
?>