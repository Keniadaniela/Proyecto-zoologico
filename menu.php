<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle2.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .vertical-menu {
            width: 200px;
            background-color: #4CAF50; /* Verde zoologico */
            padding-top: 20px;
            overflow-x: hidden;
        }

        .vertical-menu a {
            padding: 12px 16px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
            position: relative;
        }

        .vertical-menu a:hover {
            background-color: #45a049; /* Verde más oscuro */
            color: black;
        }

        .vertical-menu a::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 0;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #FFD700; /* Color de chispa (amarillo) */
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.3s ease-out;
        }

        .vertical-menu a:hover::after {
            transform: translate(-50%, -50%) scale(3);
        }

        .container {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
    <title>Inicio</title>
</head>
<body>
    <div class="vertical-menu">
        <a href="animales.php"><i class=""></i>Animales</a>
        <a href="actividades.php"><i class=""></i>Actividades</a>
        <a href="boletos.php"><i class=""></i>Boletos</a>
        <a href="empleado.php"><i class=""></i> Empleados</a>
        <a href="especies_estincion.php"><i class=""></i>Especies en Extincion</a>
        <a href="horario.php"><i class=""></i> Horarios</a>
        <a href="mantenimiento.php"><i class=""></i>Mantenimiento</a>
        <a href="parqueadero.php"><i class=""></i> Parqueadero</a>
        <a href="patiodecomida.php"><i class=""></i> Patio de comida </a>
        <a href="personal.php"><i class=""></i> Personal</a>
        <a href="recinto.php"><i class=""></i> Recinto</a>
        <a href="regalos.php"><i class=""></i>Regalos</a>
        <a href="reservacion.php"><i class=""></i> Reservacion</a>
        <a href="visitantes.php"><i class=""></i> Visitantes</a>
        <a href="zona.php"><i class=""></i> Zonas de restricción</a>
        <a href="login.html"><i class="fa fa-sign-out"></i> Salir</a>
    </div>

    <div class="container">
        <!-- Contenido de la página va aquí -->
        <h1>Bienvenido a la Página Principal</h1>
        <p>Este es un ejemplo de un menú vertical diferente.</p>
    </div>
</body>
</html>