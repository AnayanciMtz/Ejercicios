<?php
// Datos de conexión a la base de datos
$servidor = "localhost";  // O la dirección IP de tu servidor MySQL
$usuario = "root";        // Usuario de MySQL
$clave = "";             // Clave de acceso al usuario
$base_de_datos = "PHPCUARDENILLO";  // Nombre de la base de datos

// Crear la conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $clave, $base_de_datos);

// Comprobar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Consulta SQL para recuperar los datos de la tabla CURSOS
$sql = "SELECT * FROM cursos";
$resultado = $conn->query($sql);

// Comprobar si se encontraron resultados
if ($resultado->num_rows > 0) {
    // Iniciar la tabla HTML
    echo "<table border='1'>
            <tr>
                <th>Código</th>
                <th>Nombre del Curso</th>
            </tr>";

    // Mostrar los datos de cada fila
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>" . $fila['codigo'] . "</td>
                <td>" . $fila['nombrecur'] . "</td>
              </tr>";
    }

    // Cerrar la tabla HTML
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$conn->close();
?>
