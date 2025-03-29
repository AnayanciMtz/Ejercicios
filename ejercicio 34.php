<html>
<head>
<title>Mi album de fotografias</title>
</head>
<body>
<h1> Mi album de fotos en linea </h1>
<h3> Cargar archivo </h3>
<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post" enctype="multipart/form-data">
    <input type="file" name="archivo">
    <input type="submit" name="submit" value="Cargar archivo">
</form>

<?php
$ruta="img/"; // Indicar ruta

// Verificamos si el archivo ha sido cargado
if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
    $tamanyomax = 200000; // Tamaño máximo del archivo en bytes (200KB)
    $nombretemp = $_FILES['archivo']['tmp_name'];
    $nombrearchivo = $_FILES['archivo']['name'];
    $tamanyoarchivo = $_FILES['archivo']['size'];
    
    // Verificamos el tipo de archivo
    $tipoarchivo = GetImageSize($nombretemp);
    
    // Comprobamos que sea un archivo de tipo GIF o JPG
    if (($tipoarchivo[2] == IMAGETYPE_GIF || $tipoarchivo[2] == IMAGETYPE_JPEG)) {
        
        // Verificamos si el tamaño del archivo es adecuado
        if ($tamanyoarchivo <= $tamanyomax) {
            
            // Renombramos el archivo para evitar sobrescribir archivos existentes
            $nuevoNombre = uniqid('img_') . '.' . pathinfo($nombrearchivo, PATHINFO_EXTENSION);
            
            // Movemos el archivo al directorio de destino
            if (move_uploaded_file($nombretemp, $ruta . $nuevoNombre)) {
                echo "<p>El archivo se ha cargado <b>con éxito</b>. Tamaño de archivo: <b>$tamanyoarchivo</b> bytes, Nombre de imagen: <b>$nuevoNombre</b><br></p>";
            } else {
                echo "<p>No se ha podido cargar el archivo.</p>";
            }
        } else {
            echo "<p>El archivo excede el tamaño máximo permitido de <b>$tamanyomax bytes</b>.</p>";
        }
    } else {
        echo "<p>No es un archivo válido. Solo se permiten imágenes GIF o JPG.</p>";
    }
} 

echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>
<input type='submit' value='OK'></form>";

echo "<h3>Imágenes cargadas:</h3>";
$filehandle = opendir($ruta); // Abrir el directorio de imágenes

// Mostramos todas las imágenes subidas
while ($file = readdir($filehandle)) {
    if ($file != "." && $file != "..") {
        $tamanyo = GetImageSize($ruta . $file);
        echo "<p><img src='$ruta$file' $tamanyo[3]><br></p>\n";
    }
}

closedir($filehandle); // Cerrar el directorio de imágenes
?>

</body>
</html>
