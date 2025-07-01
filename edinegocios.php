<?php

    $conn = new mysqli('localhost:3306', 'root', '', 'desarrollo_web');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre= $_GET['Nombre'];

    $sql= "SELECT * FROM negocios WHERE Nombre='$nombre'";
    $query= mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
        * {
            box-sizing: border-box;
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            background-color:rgb(25, 58, 148);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .editform {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 300px;
        }

        form h1 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 0.6rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 0.7rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
<body>
    <div class="editform">
        <form action="edit_negocio.php" method="POST">
            <h1>Editar negocio</h1>
            <input type="text" name="nombre" value="<?= $row['Nombre'] ?>" placerholder="Nombre">
            <select name="categoria" value="<?= $row['Categoria'] ?>" placerholder="Categoria">
                <option class="opcion" value="VentCarros">Venta de carros</option>
                <option class="opcion" value="Ventaelectro">Venta de electrodomesticos</option>
                <option class="opcion" value="Lavcarros">Lavado de carros</option>
                <option class="opcion" value="RepaComp">Reparacion de Computadoras</option>
                <option class="opcion" value="VentComida">Venta de comida</option></select>
            <input type="text" name="correo" value="<?= $row['Correo'] ?>" placerholder="Correo">
            <input type="text" name="telefono" value="<?= $row['Telefono'] ?>" placerholder="Telefono">

            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>