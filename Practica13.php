<!DOCTYPE html>
<html>
<head>
    <title>Ingreso Anual</title>
</head>
<body>
    <form action="practica13.php" method="post">
        Nombre: <input type="text" name="nombre"><br><br>
        Ingresos Anuales:
        <select name="ingresos">
            <option value="1000">1-1000</option>
            <option value="3000">1001-3000</option>
            <option value="4000">>3000</option>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $ingresos = $_POST["ingresos"];

        echo "Nombre: $nombre <br>";

        if ($ingresos > 3000) {
            echo "Debe pagar impuestos a las ganancias.";
        } else {
            echo "No debe pagar impuestos.";
        }
    }
    ?>
</body>
</html>