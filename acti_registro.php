<!DOCTYPE html>
<html lang="es">
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
    <h2>Actividades</h2>
    <hr>
    <!-- Creo un formulario para ingresar los datos -->
    <form action="acti_guardar.php" method="POST">
        <div class="container">
            
        <p>Nombre de actividades<input type="text"name="nombre_actividad" required></p>
        <p>Descripcion<input type="text"  name="descripcion" required></p>
        <p> fecha y hora<input type="text"  name="fecha_hora" required></p>
        <p> Duracion<input type="text" name="duracion" required></p>
        <p> Costo<input type="text" name="costo" required></p>
        <p> Capacidad maxima de participantes <input type="text" name="capacidad_max_participantes" required></p>
       
        
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar</button>
            </div>
        </div>
    </form>
</body>
</html>