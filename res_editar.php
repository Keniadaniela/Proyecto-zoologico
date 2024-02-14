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
    <title>Modificar reservacion</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="reservacion.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar reservacion </h2>
    <hr />
    <form action="res_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_reservacion WHERE id_reservacion =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_reservacion']}' required>";
                echo"<p>fecha_reservacion: <input type='text' name='fecha_reservacion' value='{$row['fecha_reservacion']}' required></p>";
                echo"<p>cantidad_personas: <input type='text' name='cantidad_personas' value='{$row['cantidad_personas']}' required></p>";
                echo"<p>valor: <input type='text' name='valor' value='{$row['valor']}' required></p>";
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>