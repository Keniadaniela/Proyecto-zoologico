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
    <title>Modificar Boletos</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="boletos.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar Boletos</h2>
    <hr />
    <form action="bol_actualizar.php" method="POST">
        <div class="container">
            <?php
            //Preparamos la consulta
            $result = mysqli_query($mysqli,"SELECT * FROM tb_boletos WHERE id_boletos =$id");
            while($row = mysqli_fetch_array($result)){
                echo" <input type='hidden' name='id' value='{$row['id_boletos']}' required>";
                echo"<p>Precio: <input type='text' name='precio' value='{$row['precio']}' required></p>";
                echo"<p>Fecha de compra: <input type='text' name='fecha_compra' value='{$row['fecha_compra']}' required></p>";
                echo"<p>Tipo de boleto: <input type='text' name='tipo_boleto' value='{$row['tipo_boleto']}' required></p>";

                echo" <input type='hidden' name='id' value='{$row['id_visitantes']}' required>";


                echo" <div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>