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
    <title>Modificar personal</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="personal.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar personal</h2>
    <hr />
    <form action="per_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_personal WHERE id_personal =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_personal']}' required>";
                echo"<p>Nombre : <input type='text' name='nombre' value='{$row['nombre']}' required></p>";
                echo"<p>cargo: <input type='text' name='cargo' value='{$row['cargo']}' required></p>";
                echo"<p>fecha_contrato : <input type='text' name='fecha_contrato' value='{$row['fecha_contrato']}' required></p>";
                echo"<p>salario: <input type='text' name='salario' value='{$row['salario']}' required></p>";
                echo"<p>horario_laboral: <input type='text' name='horario_laboral' value='{$row['horario_laboral']}' required></p>";
                echo"<p>especializacion: <input type='text' name='especializacion' value='{$row['especializacion']}' required></p>";
                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>