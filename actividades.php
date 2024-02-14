<?php
include("config.php");
//Hago el query con el select
$query = "SELECT * FROM tb_actividades WHERE estado = 1 ";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Actividades</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="acti_registro.php"><i class="fa fa-registered"></i></a>
        <a href="inicio.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actividades</h2>
<hr>
<div class= "container">
    <!-- Creo la tabla para presentar las areas de la base de datos  -->
    <?php
    echo  "<table border ='1'>
<tr>
<th>Codigo</th>
<th>Nombre de actividad</th>
<th>Descripcion</th>
<th>Fecha y hora</th>
<th>Duracion</th>
<th>Costo</th>
<th>Capacidad maxima de participantes</th>

<th>Editar</th>
<th>Eliminar</th>
</tr>";

while($row = mysqli_fetch_array($result)){
//    recorro cada uno del array y lo voy presentando 
    echo "<tr>";
    echo "<td>" . $row['id_actividades'] . "</td>";
    echo "<td>" . $row['nombre_actividad'] . "</td>";
    echo "<td>" . $row['descripcion'] . "</td>";
    echo "<td>" . $row['fecha_hora'] . "</td>";
    echo "<td>" . $row['duracion'] . "</td>";
    echo "<td>" . $row['costo'] . "</td>";
    echo "<td>" . $row['capacidad_max_participantes'] . "</td>";
    
    echo "<td><a href='acti_editar.php?id=" . $row['id_actividades'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
    echo "<td><a href='acti_eliminar.php?id=" . $row['id_actividades'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
    echo "</tr>";

}
echo "</table>";

    ?>
</body>

</html>