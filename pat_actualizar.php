
<?php
//conexion
include("config.php");

// Recupera los valores del formulario
$id = $_POST['id'];
$platos = $_POST['platos'];
$bebidas= $_POST['bebidas'];
$postres= $_POST['postres'];
$valor = $_POST['valor'];


// SQL para la actualización de datos
$sql = "UPDATE tb_patio_comida
        SET 
            platos ='$platos',
            bebidas='$bebidas',
            postres ='$postres',
           valor ='$valor',
         
            
        WHERE id_patio_comida = $id";

// Ejecuta la consulta SQL y redirige a la página de usuarios
if (mysqli_query($mysqli, $sql)) {
    echo '<script language="javascript">';
    echo 'window.location = "patiodecomida.php";';
    echo '</script>';
}
?>