<?php
// Definir la URL del feed RSS que se desea leer
$feed_url = 'https://example.com/rss_feed.xml';

// Cargar el contenido del feed RSS
$rss_content = simplexml_load_file($feed_url);

// Verificar si la carga del archivo RSS fue exitosa
if ($rss_content === false) {
    echo "<p>No se pudo cargar el feed RSS.</p>";
    exit();
}

?>

<html>
<head>
    <title>Lectura de Feeds RSS</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
    <h1>Noticias Recientes</h1>

    <?php
    // Mostrar los elementos del feed RSS
    foreach ($rss_content->channel->item as $item) {
        // Mostrar el título y el enlace de cada noticia
        echo "<h2><a href='" . $item->link . "' target='_blank'>" . $item->title . "</a></h2>";
        
        // Mostrar la descripción
        echo "<p>" . $item->description . "</p>";
        
        // Mostrar la fecha de publicación (formateada)
        echo "<p><i>Publicado el: " . date('d M Y', strtotime($item->pubDate)) . "</i></p>";
        
        // Mostrar un separador entre las noticias
        echo "<hr>";
    }
    ?>

</body>
</html>
