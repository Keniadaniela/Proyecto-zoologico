<?php
include("config.php");
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css">
    <title>Modificar Actividades</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="actividades.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar actividades</h2>
    <hr />
    <form action="acti_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_actividades WHERE id_actividades =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_actividades']}' required>";
                echo"<p>Nombre de actividades: <input type='text' name='nombre_actividad' value='{$row['nombre_actividad']}' required></p>";
                echo"<p>Descripcion: <input type='text' name='descripcion' value='{$row['descripcion']}' required></p>";
                echo"<p>fecha y hora: <input type='text' name='fecha_hora' value='{$row['fecha_hora']}' required></p>";
                echo"<p>Duracion: <input type='text' name='duracion' value='{$row['duracion']}' required></p>";
                echo"<p>Costo: <input type='text' name='costo' value='{$row['costo']}' required></p>";
                echo"<p>Capacidad maxima de participantes: <input type='text' name='capacidad_max_participantes' value='{$row['capacidad_max_participantes']}' required></p>";
   
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>