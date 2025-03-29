<!DOCTYPE html>
<html>
<head>
    <title>Los Números Aleatorios</title>
</head>
<body>

<?php
// Generar el número aleatorio entre 1 y 100
$num = rand(1, 100);

// Mostrar el número generado por medio de esta aleatoriedad
echo "<h1>El número generado es: $num</h1>";

// Verificar si el numero es menor o igual a 50 o mayor
if ($num <= 50) {
    echo "<p>El número es menor o igual a 50.</p>";
} else {
    echo "<p>El número es mayor a 50.</p>";
}
?>

</body>
</html>
