<html>
<head>
    <title>completo</title>
</head>
<body>
    <h1>completo</h1>

    <?php
    // Declaración de variables
    $nombre = "Miguel";
    $a = 8;
    $b = 3;
    $c = 3;

    // Saludo con concatenación
    echo "<p>Hola <b>" . $nombre . "</b>, bienvenido al ejercicio completo.</p>";

    // Operaciones aritméticas
    echo "<h2>Operaciones Aritméticas</h2>";
    echo "Suma: " . ($a + $b) . "<br>";
    echo "Resta: " . ($a - $b) . "<br>";
    echo "Multiplicación: " . ($a * $b) . "<br>";
    echo "División: " . ($a / $b) . "<br>";

    // Incremento y decremento
    $a++;
    $b--;
    echo "Incremento de A: $a <br>";
    echo "Decremento de B: $b <br>";

    // Operadores de comparación
    echo "<h2>Operadores de Comparación</h2>";
    echo "¿A es igual a B? " . ($a == $b ? "Sí" : "No") . "<br>";
    echo "¿A es diferente de B? " . ($a != $b ? "Sí" : "No") . "<br>";
    echo "¿A es mayor que B? " . ($a > $b ? "Sí" : "No") . "<br>";
    echo "¿A es menor o igual a C? " . ($a <= $c ? "Sí" : "No") . "<br>";

    // Operadores lógicos
    echo "<h2>Operadores Lógicos</h2>";
    echo "¿A es mayor que B y C es igual a B? " . (($a > $b && $c == $b) ? "Verdadero" : "Falso") . "<br>";
    echo "¿A es igual a B o C es igual a B? " . (($a == $b || $c == $b) ? "Verdadero" : "Falso") . "<br>";
    echo "Negación de (B menor o igual a C): " . (!($b <= $c) ? "Verdadero" : "Falso") . "<br>";

    // Arrays (método corto)
    echo "<h2>Arrays</h2>";
    $dias = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    echo "El tercer día de la semana es: <b>$dias[2]</b><br>";

    ?>

</body>
</html>
