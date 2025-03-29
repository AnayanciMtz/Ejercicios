<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro de Usuario</h2>
    <form action="procesar.php" method="post">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>

        <label for="clave1">Clave (primer intento):</label>
        <input type="password" name="clave1" id="clave1" required><br><br>

        <label for="clave2">Clave (confirmar):</label>
        <input type="password" name="clave2" id="clave2" required><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
