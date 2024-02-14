<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$fecha_contrato= $_POST['fecha_contrato'];
$salario = $_POST['salario'];
$horario_laboral = $_POST['horario_laboral'];
$especializacion = $_POST['especializacion'];

// SQL para la actualización de datos
$sql = "UPDATE tb_personal
        SET 
        nombre ='$nombre',
        cargo ='$cargo',
        fecha_contrato ='$fecha_contrato',
        salario ='$salario',
        horario_laboral ='$horario_laboral',
        especializacion='$especializacion'
            
        WHERE id_personal = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "personal.php";';
    echo '</script>';
}
?>