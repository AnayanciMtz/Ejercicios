<!DOCTYPE html>
<html>
<head>
    <title>Número en Castellano</title>
</head>
<body>

<?php
// Generar un número aleatorio entre 1 y 5
$num = rand(1, 5);

// Convertir el número a su representación en texto
if ($num == 1) {
    $texto = "uno";
} elseif ($num == 2) {
    $texto = "dos";
} elseif ($num == 3) {
    $texto = "tres";
} elseif ($num == 4) {
    $texto = "cuatro";
} else {
    $texto = "cinco";
}

// Imprimir el resultado
echo "<p>El número generado es: <b>$num</b></p>";
echo "<p>En castellano se escribe: <b>$texto</b></p>";
?>

</body>
</html>
