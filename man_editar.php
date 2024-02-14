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
    <title>Modificar mantenimiento</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="mantenimiento.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar mantenimiento</h2>
    <hr />
    <form action="man_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_mantenimiento_areas WHERE id_mantenimient_areas =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_mantenimient_areas']}' required>";
                echo"<p>nombre: <input type='text' name='nombre' value='{$row['nombre']}' required></p>";
                echo"<p>fecha: <input type='text' name='fecha' value='{$row['fecha']}' required></p>";
                echo"<p>valor_mantenimientos: <input type='text' name='valor_mantenimientos' value='{$row['valor_mantenimientos']}' required></p>";
                echo"<p>id_recinto: <input type='text' name='id_recinto' value='{$row['id_recinto']}' required></p>";
              
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>