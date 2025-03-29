<?php
// Definir la ruta del archivo
$file = 'datos.txt';

// Comprobar si el archivo existe y tiene contenido
if (file_exists($file)) {
    // Leer el contenido del archivo
    $contenido = file_get_contents($file);
} else {
    $contenido = "No hay pedidos registrados.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos de Pizzas</title>
</head>
<body>
    <h1>Lista de Pedidos de Pizzas</h1>
    <p>Se muestran los pedidos realizados:</p>

    <pre>
        <?php
        // Mostrar el contenido del archivo con los pedidos
        echo $contenido;
        ?>
    </pre>
</body>
</html>
