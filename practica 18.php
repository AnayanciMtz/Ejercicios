<?php
// Crear un vector asociativo con claves de acceso de 5 usuarios
$usuarios = array(
    "ivan" => "clave199",
    "marisol" => "clave198",
    "josue" => "clave195",
    "ana" => "clave200",
    "leonardo" => "clave334"
);

// Acceder a cada componente por su nombre y mostrarlo
echo "Clave de Ivan: " . $usuarios["ivan"] . "<br>";
echo "Clave de Marisol: " . $usuarios["marisol"] . "<br>";
echo "Clave de Josue: " . $usuarios["josue"] . "<br>";
echo "Clave de Ana: " . $usuarios["ana"] . "<br>";
echo "Clave de Leonardo: " . $usuarios["leonardo"] . "<br>";
?>
