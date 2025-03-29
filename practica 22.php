<?php
// Datos de conexión a la base de datos
$servidor = "localhost"; // O la dirección IP de tu servidor MySQL
$usuario = "root"; // Usuario de MySQL
$clave = ""; // Contraseña de acceso al usuario
$base_de_datos = "escuela"; // Nombre de la base de datos

// Crear la conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $clave, $base_de_datos);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Alumno</title>
</head>
<body>
    <h1>Buscar Alumno</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nombre">Ingrese el nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Buscar">
    </form>

<?php
// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre'])) {
    $nombre = $_POST['nombre']; // Obtener el nombre del alumno desde el formulario

    // Consulta SQL para obtener los alumnos con ese nombre
    $sql = "SELECT * FROM alumnos WHERE nombre LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Comprobar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        echo "<h2>Resultados encontrados:</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Curso</th>
                </tr>";

        // Mostrar los datos de cada alumno
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>" . $fila['id'] . "</td>
                    <td>" . $fila['nombre'] . "</td>
                    <td>" . $fila['edad'] . "</td>
                    <td>" . $fila['curso'] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No se encontraron alumnos con ese nombre.</p>";
    }

    // Cerrar la declaración preparada
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>
