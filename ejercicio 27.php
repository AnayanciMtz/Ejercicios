<?php

if (isset($_POST['pw'])) {
$pw = $_POST['pw']; if ($pw == "magic") {
header ("Location: newpage1.html");
} elseif ($pw == "abracadabra" ){ header ("Location: newpage2.html");
} else {
header ("Location: sorry.html");
}
}
?>

<html>

<head>
<title>Ejemplo de password y header</title>
</head>
<body>
<h1> Ejemplo de password y funcion header </h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" name="pw">
 

<input type="submit" value="Envialo">
</form>
</body>
</html>
Newpage1.html
<html>
<head>
<title>newpage1</title>
</head>
<body>
Esta es la pagina protegida con MAGIC newpage1.html
</body>
</html>
Newpage2.html
<html>
<head>
<title>newpage2</title>
</head>
<body>
Esta es la pagina protegida con ABRACADABRA newpage2
</body>
</html>
Sorry.html
<html>

<head>
<title>Sorry</title>
</head>
<body>
Lo sentimos, ese no es el password correcto. Intentalo otra vez sorry.html
 


</body>

</html>
