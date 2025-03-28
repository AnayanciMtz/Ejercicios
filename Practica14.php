<!DOCTYPE html>
<html>
<head>
    <title>Contrato</title>
</head>
<body>
    <form action="practica14.php" method="post">
        <textarea name="contrato" rows="8" cols="50">
En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..] con domicilio en [……..] y el Sr. [……..], futuro empleado con domicilio en [……..].
        </textarea><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contrato = $_POST["contrato"];
        echo "<h2>Contrato Modificado:</h2>";
        echo "<p>$contrato</p>";
    }
    ?>
</body>
</html>