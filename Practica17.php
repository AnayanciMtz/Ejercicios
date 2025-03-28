<?php
$archivo = "datos.txt";

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    echo "<pre>$contenido</pre>";
} else {
    echo "No hay pedidos registrados.";
}
?>
