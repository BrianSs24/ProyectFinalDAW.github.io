<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyles.css">
    <title>Iniciar sesion</title>
</head>
<body class="editlogin" >
    <form class="login" id="login" name="login" action="validar_login.php" method="post" >

        <h1 class="etiqueta">Inicia sesion</h1>
        <h4 class="espa" ></h4>
        <h2 class="nomusu" >Nombre de Usuario:</h2>
        <input class="usuario" type="text" name="usuario" id="usuario" placeholder="Escribe tu nombre de usuario">
        <h3 class="conusu" >Contraseña:</h3>
        <input class="contraseña" type="password" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña">
        <input class="boton" type="submit" name="entrar" id="entrar" value="Entrar">
    </form>
  
</body>
</html>