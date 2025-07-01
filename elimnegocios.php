<?php

     $conn = new mysqli('localhost:3306', 'root', '', 'desarrollo_web');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $nombre= $_GET['Nombre'];

    $sql= "DELETE FROM negocios WHERE Nombre='$nombre'";

    $query= mysqli_query($conn, $sql);

    if ($query){

        header("location: dashboard.php");
    }

?>