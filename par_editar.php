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
    <title>Modificar parqueadero</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="parqueadero.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar parqueadero</h2>
    <hr />
    <form action="par_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_parqueadero WHERE id_parqueadero =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_parqueadero']}' required>";
                echo"<p>num_bloque: <input type='text' name='num_bloque' value='{$row['num_bloque']}' required></p>";
                echo"<p>tipo_vehiculo: <input type='text' name='tipo_vehiculo' value='{$row['tipo_vehiculo']}' required></p>";
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>