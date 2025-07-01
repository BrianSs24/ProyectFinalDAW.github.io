<?php
// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificamos si existen los campos
    $nombre = $_POST['Nombre'] ?? '';
    $categoria = $_POST['Categoria'] ?? '';
    $correo = $_POST['Correo'] ?? '';
    $telefono = $_POST['Telefono'] ?? '';
    $descripcion = $_POST['Descripcion'] ?? '';
    $experiencia = $_POST['Experiencia'] ?? '';
    echo "recibe";
    // Conexión a la base de datos
    $conn = new mysqli('localhost:3306', 'root', '', 'desarrollo_web');
    echo "se conecto";
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    // Consulta SQL con placeholders correctos
    $sql = "INSERT INTO negocios (Nombre, Categoria, Correo, Telefono, Descripcion, Experiencia)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error al preparar la consulta: " . $conn->error);
    }
    // Asociar parámetros
    $stmt->bind_param("ssssss", $nombre, $categoria, $correo, $telefono, $descripcion, $experiencia);
    if ($stmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
    } else {
        echo "Error al registrar: " . $stmt->error;
    }
    // Cerrar conexiones
    $stmt->close();
    $conn->close();
}

?>

