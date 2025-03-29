<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingresos</title>
    <script>
        function verificarImpuestos() {
            var nombre = document.getElementById("nombre").value;
            var ingreso = document.getElementById("ingreso").value;
            
            if (nombre === "") {
                alert("Por favor, ingrese su nombre.");
                return;
            }

            var mensaje = "<h2>Resultado</h2>";
            mensaje += "<p><b>Nombre:</b> " + nombre + "</p>";

            // Verificar si debe pagar impuestos
            if (ingreso === "mayor3000") {
                mensaje += "<p><b>Debe pagar impuestos a las ganancias.</b></p>";
            } else {
                mensaje += "<p><b>No debe pagar impuestos a las ganancias.</b></p>";
            }

            document.getElementById("resultado").innerHTML = mensaje;
        }
    </script>
</head>
<body>

    <h2>Formulario de Ingresos Anuales</h2>
    <form onsubmit="event.preventDefault(); verificarImpuestos();">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" required><br><br>

        <label for="ingreso">Selecciona tu rango de ingresos anuales:</label><br>
        <select id="ingreso" required>
            <option value="1-1000">1 - 1000</option>
            <option value="1001-3000">1001 - 3000</option>
            <option value="mayor3000">>3000</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <div id="resultado"></div>

</body>
</html>
