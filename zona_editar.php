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
    <title>Modificar zona</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="zona.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar zona</h2>
    <hr />
    <form action="zona_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_zona_restrinccion WHERE id_zona_restrinccion =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_zona_restrinccion']}' required>";
                echo"<p>limite_acceso: <input type='text' name='limite_acceso' value='{$row['limite_acceso']}' required></p>";
                echo"<p>personal_autorizado: <input type='text' name='personal_autorizado' value='{$row['personal_autorizado']}' required></p>";
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>