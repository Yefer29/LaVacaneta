<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles2.css" rel="stylesheet" />
    <title>Registro de Inventario</title>
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
            max-width: 400px;
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

        input {
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

        .inventario-registrado {
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
    <h2>Registro de Inventario</h2>
    <form action="registrar_inventario.php" method="post">
        <label for="suministro">Suministro:</label>
        <input type="text" name="suministro" required>

        <label for="medicamento">Medicamento:</label>
        <input type="text" name="medicamento" required>

        <label for="equipo">Equipo:</label>
        <input type="text" name="equipo" required>

        <label for="otros_materiales">Otros Materiales:</label>
        <input type="text" name="otros_materiales">

        <input type="submit" value="Registrar">
    </form>
    <hr>
    <h2>Inventario Registrado</h2>
    <div class="inventario-registrado">
        <table> 
            <?php include("mostrar_inventario.php"); ?>
        </table>
    </div>
</body>
</html>
