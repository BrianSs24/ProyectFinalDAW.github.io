<?php

     $conn = new mysqli('localhost:3306', 'root', '', 'desarrollo_web');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre= $_POST['nombre'];
    $categoria= $_POST['categoria'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];

    $sql= "UPDATE negocios SET Nombre='$nombre', Categoria='$categoria', Correo='$correo', Telefono='$telefono' WHERE Nombre='$nombre'";
    $query= mysqli_query($conn, $sql);

    if ($query){

        header("location: listar_negocios.php");
    }

?>