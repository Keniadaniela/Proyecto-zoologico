<?php
include("config.php");
//Hago el query con el select
$query = "SELECT * FROM tb_recinto WHERE estado = 1 ";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Recintos</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="rec_registro.php"><i class="fa fa-registered"></i></a>
        <a href="inicio.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Recintos</h2>
<hr>
<div class= "container">
    <!-- Creo la tabla para presentar las areas de la base de datos  -->
    <?php
    echo  "<table border ='1'>
<tr>
<th>Codigo</th>
<th>Nombre de Recinto</th>
<th>Descripcion</th>
<th>Capacidad</th>
<th>Tipo de habitad</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>";

while($row = mysqli_fetch_array($result)){
//    recorro cada uno del array y lo voy presentando 
    echo "<tr>";
    echo "<td>" . $row['id_recinto'] . "</td>";
    echo "<td>" . $row['nombre_recinto'] . "</td>";
    echo "<td>" . $row['descripcion'] . "</td>";
    echo "<td>" . $row['capacidad'] . "</td>";
    echo "<td>" . $row['tipo_habitad'] . "</td>";
    echo "<td><a href='rec_editar.php?id=" . $row['id_recinto'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
    echo "<td><a href='rec_eliminar.php?id=" . $row['id_recinto'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
    echo "</tr>";

}
echo "</table>";

    ?>
</body>

</html>