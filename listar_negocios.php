<?php
$conn = new mysqli('localhost:3306', 'root', '', 'desarrollo_web');
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
$sql = "SELECT * FROM negocios";
$query= mysqli_query($conn, $sql);
?>
    <div class="tabla">
        <h2>Negocios registrados</h2>
        <table>
            <thead>

            <tr>
                <th class="etiquetas" >Nombre</th>
                <th class="etiquetas"  >Categoria</th>
                <th class="etiquetas"  >Correo</th>
                <th class="etiquetas"  >Telefono</th>
                <th></th>
                <th></th>
            </tr>

                <tbody>
                    <?php while($row = mysqli_fetch_array($query) ): ?>
                    <tr>
                    <th class="datos" ><?= $row['Nombre'] ?></th>
                    <th class="datos" ><?= $row['Categoria'] ?></th>
                    <th class="datos" ><?= $row['Correo'] ?></th>
                    <th class="datos" ><?= $row['Telefono'] ?></th>
                    <th><a href="edinegocios.php?Nombre=<?= $row['Nombre'] ?>">Editar</a></th>
                    <th><a href="elimnegocios.php?Nombre=<?= $row['Nombre'] ?>">Elminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </thead>
        </table>
    </div>


