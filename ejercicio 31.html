<?php 
setcookie("check", 1); 
if (isset($_POST['submit'])) { 
    setcookie("vote", 1); 
}
?>
<html>
<head>
<title>Encuesta de opinión</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Encuesta</h1>
<h3>¿Qué opinas de este curso de PHP?</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="radio" name="reply" value="0"> Excelente, he aprendido mucho.<br>
    <input type="radio" name="reply" value="1"> Más o menos, es muy complicado.<br>
    <input type="radio" name="reply" value="2"> ¡Bah! ¿Para qué quiero aprender PHP?<br><br>

    <?php
    if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
        // Mostrar el botón "vota!" solo si el formulario no se ha enviado
        // y el usuario no ha votado
        ?>
        <input name="submit" type="submit" value="Vota!">
    <?php
    } else {
        echo "<p>Gracias por tu voto.</p>\n";
        // Si el formulario se envió y el usuario no ha votado aún
        if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
            // Guardar el archivo de resultados
            $file = "results.txt";
            $fp = fopen($file, "r+");
            
            $vote = fread($fp, filesize($file));
            $arr_vote = explode(",", $vote); // Convertir la cadena a array
            $reply = $_POST['reply'];
            $arr_vote[$reply]++; // Incrementar el voto seleccionado
            $vote = implode(",", $arr_vote); // Convertir el array de nuevo a cadena

            rewind($fp); // Volver al principio del archivo
            fputs($fp, $vote); // Escribir los resultados actualizados
            fclose($fp); // Cerrar el archivo
        }
    }
    ?>
</form>
<p>
    [ <a href="results.php" target="_blank">Ver resultados de la encuesta</a> ]
</p>
</body>
</html>
<?php
$file = "results.txt";

// Verificar si el archivo existe
if (file_exists($file)) {
    $fp = fopen($file, "r");
    $vote = fread($fp, filesize($file));
    fclose($fp);
    
    $arr_vote = explode(",", $vote); // Convertir los resultados a array
    
    echo "<h1>Resultados de la Encuesta</h1>";
    echo "<p>Excelente, he aprendido mucho: " . $arr_vote[0] . " votos</p>";
    echo "<p>Más o menos, es muy complicado: " . $arr_vote[1] . " votos</p>";
    echo "<p>¡Bah! ¿Para qué quiero aprender PHP?: " . $arr_vote[2] . " votos</p>";
} else {
    echo "<p>No hay resultados disponibles.</p>";
}
?>
