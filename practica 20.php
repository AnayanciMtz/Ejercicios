<?php
// Datos de conexión a la base de datos
$servidor = "localhost";  // O la dirección IP de tu servidor MySQL
$usuario = "root";        // Usuario de MySQL
$clave = "";             // Clave de acceso al usuario
$base_de_datos = "PHPFACIL";  // Nombre de la base de datos

// Crear la conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $clave, $base_de_datos);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Recibir el nombre del curso (esto podría ser a través de un formulario, por ejemplo)
$nombrecur = "Curso de PHP Básico";  // Este es un ejemplo, normalmente se obtiene del formulario.

// Consulta para insertar el nuevo curso
$sql = "INSERT INTO cursos (nombrecur) VALUES ('$nombrecur')";

// Ejecutar la consulta y comprobar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Nuevo curso registrado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
