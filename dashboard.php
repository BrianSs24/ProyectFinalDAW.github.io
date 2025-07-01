<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dashboardstyles.css">
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="listarStyles.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2 class="dusuario">Online: <?php echo htmlspecialchars($usuario); ?></h2>
            <h1>Dashboard</h1>
            <h3>Contenido</h3>
            <span class="link" onclick="cargarContenido('registnegocio.php')">Registrar negocio</span>
            <span class="link" onclick="cargarContenido('listar_negocios.php')">Ver negocios</span>
            <span class="link" onclick="window.location.href='logout.php'">Cerrar sesión</span>
        </div>

        <div id="contenedor" class="content">
            <div id="bienvenida" class="section active">
                <h4></h4>
                <h2 class="h2">Bienvenido a Puerta Abierta</h2>
            </div>
        </div>
    </div>

    <script>
        function cargarContenido(archivo) {
            const contenedor = document.getElementById('contenedor');
            contenedor.innerHTML = "<p>Cargando...</p>";

            fetch(archivo)
                .then(respuesta => {
                    if (!respuesta.ok) throw new Error("Error al cargar el archivo");
                    return respuesta.text();
                })
                .then(html => {
                    contenedor.innerHTML = html;
                })
                .catch(error => {
                    contenedor.innerHTML = "<p style='color:red;'>No se pudo cargar el contenido.</p>";
                    console.error("Error:", error);
                });
        }

        window.addEventListener('load', function () {
            history.pushState(null, "", location.href);
        });

        window.addEventListener('popstate', function () {
            const confirmar = confirm("¿Deseas cerrar sesión y salir del dashboard?");
            if (confirmar) {
                window.location.href = "logout.php";
            } else {
                history.pushState(null, "", location.href);
            }
        });
    </script>
</body>
</html>