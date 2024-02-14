<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Boletos</title>
</head>
<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="areas.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Boletos</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="bol_guardar.php" method="POST">
        <div class="container">
            
        <p>Precio: <input type="text"name="precio" required></p>
        <p>Fecha de compra<input type="text"  name="fecha_comprar" required></p>
        <p>Tipo de boleto<input type="text"  name="tipo_boleto" required></p>
        <p>Visitantes<input type="text" name="id_visitantes" required></p>
    
        
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>