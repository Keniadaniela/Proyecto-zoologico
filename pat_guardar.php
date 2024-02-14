<?php 
include("config.php");
$platos = $_POST['platos'];
$bebidas = $_POST['bebidas'];
$postres= $_POST['postres'];
$valor = $_POST['valor'];


$sql = "INSERT INTO tb_patio_comida(platos,bebidas,postres,valor) 
VALUES('$platos','$bebidas','$postres','$valor')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="patiodecomida.php";';
	echo '</script>';	
}
?>