<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles2.css" rel="stylesheet" />
    <title>Registro de Trabajadores</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: rgba(230, 167, 86, 0.9);
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        hr {
            margin-top: 40px;
            margin-bottom: 20px;
            border: 0;
            border-top: 2px solid #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: rgba(230, 167, 86, 0.9);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .trabajadores-registrados {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="animal_form.php">Animales</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="salud_form.php">Salud</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="inventario_form.php">Inventario</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="trabajadores_form.php">Trabajadores</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <h2>Registro de Trabajadores</h2>
    <form action="registrar_trabajador.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion">

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono">

        <label for="historial_empleo">Historial de Empleo:</label>
        <textarea name="historial_empleo"></textarea>

        <label for="salario">Salario:</label>
        <input type="number" step="0.01" name="salario">

        <label for="permisos">Permisos:</label>
        <textarea name="permisos"></textarea>

        <label for="certificaciones">Certificaciones:</label>
        <textarea name="certificaciones"></textarea>

        <input type="submit" value="Registrar Trabajador">
    </form>
    <hr>
    <h2>Trabajadores Registrados</h2>
    <div class="trabajadores-registrados">
        <?php include("mostrar_trabajadores.php"); ?>
    </div>
</body>
</html>

