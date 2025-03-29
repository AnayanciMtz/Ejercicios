<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>

<h2>Resultado</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $estudios = htmlspecialchars($_POST['estudios']);

    echo "<p>Nombre: <b>$nombre</b></p>";
    echo "<p>Nivel de estudios: <b>$estudios</b></p>";
} else {
    echo "<p>Error en el envío del formulario.</p>";
}
?>

</body>
</html>
