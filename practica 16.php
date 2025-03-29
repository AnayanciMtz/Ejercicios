<?php
// Comprobamos si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $jamonYQuesoCantidad = $_POST['jamonYQuesoCantidad'];
    $napolitanaCantidad = $_POST['napolitanaCantidad'];
    $mozzarellaCantidad = $_POST['mozzarellaCantidad'];
    
    // Crear un string con la información del pedido
    $pedido = "Nombre: " . $nombre . "\n";
    $pedido .= "Dirección: " . $direccion . "\n";
    $pedido .= "Jamón y Queso: " . $jamonYQuesoCantidad . " pizza(s)\n";
    $pedido .= "Napolitana: " . $napolitanaCantidad . " pizza(s)\n";
    $pedido .= "Mozzarella: " . $mozzarellaCantidad . " pizza(s)\n";
    $pedido .= "------------------------------------\n";

    // Escribir el pedido en el archivo "datos.txt"
    file_put_contents("datos.txt", $pedido, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Pizzas</title>
</head>
<body>
    <h1>Formulario de Pedido de Pizzas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Nombre -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Dirección -->
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <!-- Tipo de Pizzas y Cantidad -->
        <h3>Selecciona los tipos de pizza y la cantidad:</h3>
        
        <label for="jamonYQueso">Jamón y Queso:</label>
        <input type="checkbox" id="jamonYQueso" name="jamonYQueso" value="1">
        Cantidad: <input type="number" name="jamonYQuesoCantidad" min="0" max="10" value="0"><br><br>

        <label for="napolitana">Napolitana:</label>
        <input type="checkbox" id="napolitana" name="napolitana" value="1">
        Cantidad: <input type="number" name="napolitanaCantidad" min="0" max="10" value="0"><br><br>

        <label for="mozzarella">Mozzarella:</label>
        <input type="checkbox" id="mozzarella" name="mozzarella" value="1">
        Cantidad: <input type="number" name="mozzarellaCantidad" min="0" max="10" value="0"><br><br>

        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Confirmar Pedido">
    </form>
</body>
</html>
