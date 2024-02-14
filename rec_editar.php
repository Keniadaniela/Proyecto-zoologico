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
    <title>Modificar Recintos</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="recinto.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar Recintos</h2>
    <hr />
    <form action="rec_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_recinto WHERE id_recinto =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_recinto']}' required>";
                echo"<p>Nombre de recinto: <input type='text' name='nombre_recinto' value='{$row['nombre_recinto']}' required></p>";
                echo"<p>Descripcion: <input type='text' name='descripcion' value='{$row['descripcion']}' required></p>";
                echo"<p>Capacidad: <input type='text' name='capacidad' value='{$row['capacidad']}' required></p>";
                echo"<p>Tipo de habitad: <input type='text' name='tipo_habitad' value='{$row['tipo_habitad']}' required></p>";
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>