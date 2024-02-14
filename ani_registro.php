<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Ingresar Datos</title>
</head>
<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="areas.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Animales</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="ani_guardar.php" method="POST">
        <div class="container">
            
        <p>Nombre: <input type="text"name="nombre" required></p>
        <p>Especie<input type="text"  name="especie" required></p>
        <p> Edad<input type="text"  name="edad" required></p>
        <p> Genero<input type="text" name="genero" required></p>
        <p> Fecha de nacimiento<input type="text" name="fecha_nacimiento" required></p>
        
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>