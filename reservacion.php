<?php
include("config.php");
//Hago el query con el select
$query = "SELECT * FROM tb_reservacion WHERE estado = 0 ";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>reservacion</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="res_registro.php"><i class="fa fa-registered"></i></a>
        <a href="inicio.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>reservacion</h2>
<hr>
<div class= "container">
    <!-- Creo la tabla para presentar las areas de la base de datos  -->
    <?php
    echo  "<table border ='1'>
<tr>
<th>Codigo</th>
<th>fecha_reservacion</th>
<th>cantidad_personas</th>
<th>valor</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>";

while($row = mysqli_fetch_array($result)){
//    recorro cada uno del array y lo voy presentando 
    echo "<tr>";
    echo "<td>" . $row['id_reservacion'] . "</td>";
    echo "<td>" . $row['fecha_reservacion'] . "</td>";
    echo "<td>" . $row['cantidad_personas'] . "</td>";
    echo "<td>" . $row['valor'] . "</td>";
    echo "<td><a href='res_editar.php?id=" . $row['id_reservacion'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
    echo "<td><a href='res_eliminar.php?id=" . $row['id_reservacion'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";
    echo "</tr>";

}
echo "</table>";

    ?>
</body>

</html>