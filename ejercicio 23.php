<html>
<head>
<title>Uso de Librerias y Funciones</title>
</head>
<body>
<?php
function CabeceraPagina()
{
?>
<FONT SIZE="+1">Esta cabecera estará en todas sus páginas.</FONT><BR>
<hr>
<?
}
function PiePagina()
{
?>
<hr>
<FONT SIZE="-1">Este es el pie de página.</FONT><BR>
     Autor: Joaquin Gracia
<?
}
?>
</body>
</html>
 

22_pag1.php
<html>
<head>
<title>Ejemplo Pagina 1 Libreria</title>
</head>
<body>
<?php include("21_libreria.phtml") ?>
<?php CabeceraPagina(); ?>

Página 1
<BR><BR><BR><BR><BR>

Contenido blalbl blalb alb<BR><BR> más cosas...<BR><BR>
fin<BR><BR>

<?php PiePagina(); ?>

</body>

</html>
23_pag2.php
<html>
<head>
<title>Ejemplo Pagina 2 Librerias</title>
</head>

<body>
<?php include("21_libreria.phtml") ?>
<?php CabeceraPagina(); ?>
Esta es otra página<BR><BR> completamente distinta<BR><BR>
pero comparte el pie y la cabecera con la otra.<BR><BR>

<?php PiePagina(); ?>
 

</body>
</html>
