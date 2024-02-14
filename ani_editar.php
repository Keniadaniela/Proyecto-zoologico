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
    <title>Modificar Animales</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="animales.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar Animale</h2>
    <hr />
    <form action="ani_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_animales WHERE id_animales =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_animales']}' required>";
                echo"<p>Nombre: <input type='text' name='nombre' value='{$row['nombre']}' required></p>";
                echo"<p>Especie: <input type='text' name='especie' value='{$row['especie']}' required></p>";
                echo"<p>Edad: <input type='text' name='edad' value='{$row['edad']}' required></p>";
                echo"<p>Genero: <input type='text' name='genero' value='{$row['genero']}' required></p>";
                echo"<p>Fecha de nacimiento: <input type='text' name='fecha_nacimiento' value='{$row['fecha_nacimiento']}' required></p>";
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>