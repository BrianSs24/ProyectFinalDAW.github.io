<?php
$usuario=$_POST['usuario'] ?? '';
$contraseña=$_POST['contraseña'] ?? '';
session_start();

$conn = new mysqli('localhost:3306', 'root', '', 'desarrollo_web');
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombre_usuario=?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();



if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    if (password_verify($contraseña, $fila['contraseña'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: Bienvenida.php");
        exit();
    } else {
        include("index.php");
        echo "Contraseña incorrecta.";      
    }
} else {
    echo "El usuario no existe.";
    
}
$stmt->close();
$conn->close();
?>
