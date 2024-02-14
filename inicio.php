<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffd699; /* Color melocotón */
        }

        .header {
            background-color: #2e7d32; /* Verde oscuro */
            color: white;
            text-align: center;
            padding: 40px;
            margin-bottom: 40px;
        }

        .header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        .content {
            padding: 20px;
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 14px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .content p {
            color: #4e342e; /* Marrón oscuro */
            font-size: 1.2em;
        }

        .login-link {
            display: inline-block;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            background-color: #6d4c41; /* Marrón medio */
            padding: 10px 30px; /* Ajusta el ancho del botón aquí */
            border-radius: 15px;
            transition: background-color 0.3s;
        }

        .login-link:hover {
            background-color: #8d6e63; /* Marrón claro */
        }
    </style>
    <title>Sistema de Gestión Zoológico</title>
</head>
<body>

<div class="header">
    <h1>Sistema de Gestión Zoológico</h1>
</div>

<div class="content">
    <p>¡Bienvenido al sistema de gestión zoológico el Pantanal!</p>
    <p>Aquí puedes gestionar todas tus especies, exhibiciones y más.</p>
    <a href="login.html" class="login-link">Iniciar Sesión</a>
</div>

</body>
</html>