<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyles.css">
    <title>Bienvenida</title>
</head>
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$nombreUsuario = $_SESSION['usuario'];
?>
<body>
    <div class="bienvenida">
    <h1></h1>
    <h2 class="bienvenido" >Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?></h2>
    <p class="incio" >Has iniciado sesión correctamente.</p>
    <input type="submit" class="boton2" onclick="window.location.href='dashboard.php'" value="Continuar">
    </div>
  <script>
        history.pushState(null, null, location.href);
        window.addEventListener('popstate', function () {
            const salir = confirm("¿Deseas salir del dashboard y cerrar sesión?");
            if (salir) {
                window.location.href = "logout.php";
            } else {
                history.pushState(null, null, location.href); 
            }
        });
    </script>
     
</body>
</html>