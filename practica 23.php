<?php
// Datos de conexión a la base de datos
$servidor = "localhost"; // O la dirección IP de tu servidor MySQL
$usuario = "root"; // Usuario de MySQL
$clave = ""; // Contraseña de acceso al usuario
$base_de_datos = "PHPFACIL"; // Nombre de la base de datos

// Crear la conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $clave, $base_de_datos);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['curso'])) {
    $curso = $_POST['curso']; // Obtener el nombre del curso desde el formulario

    // Verificar si el curso existe en la base de datos
    $sql = "SELECT * FROM cursos WHERE nombrecur = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $curso);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // El curso existe, proceder a eliminarlo
        $sql_delete = "DELETE FROM cursos WHERE nombrecur = ?";
        $stmt_delete = $conn->prepare($sql_delete);
        $stmt_delete->bind_param("s", $curso);
        if ($stmt_delete->execute()) {
            echo "<p>El curso '$curso' ha sido borrado correctamente.</p>";
        } else {
            echo "<p>Error al borrar el curso '$curso'.</p>";
        }
    } else {
        // El curso no existe
        echo "<p>No se encontró el curso '$curso'.</p>";
    }

    // Cerrar la declaración preparada
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Curso</title>
</head>
<body>
    <h1>Borrar Curso</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="curso">Ingrese el nombre del curso a eliminar:</label>
        <input type="text" id="curso" name="curso" required>
        <input type="submit" value="Eliminar Curso">
    </form>
</body>
</html>
