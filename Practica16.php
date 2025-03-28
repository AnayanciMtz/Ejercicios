<!DOCTYPE html>
<html>
<head>
    <title>Pedido de Pizza</title>
</head>
<body>
    <form action="practica16.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Dirección: <input type="text" name="direccion"><br>
        
        <h3>Seleccione sus pizzas:</h3>
        Jamón y Queso <input type="checkbox" name="pizza[]" value="Jamón y Queso"><br>
        Napolitana <input type="checkbox" name="pizza[]" value="Napolitana"><br>
        Mozzarella <input type="checkbox" name="pizza[]" value="Mozzarella"><br><br>

        <input type="submit" value="Confirmar Pedido">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $pizzas = isset($_POST["pizza"]) ? implode(", ", $_POST["pizza"]) : "Ninguna";

        $pedido = "Nombre: $nombre\nDirección: $direccion\nPizzas: $pizzas\n-------------------\n";

        file_put_contents("datos.txt", $pedido, FILE_APPEND);

        echo "<p>Pedido registrado correctamente.</p>";
    }
    ?>
</body>
</html>
