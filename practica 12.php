<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Deportes</title>
    <script>
        function mostrarDeportes() {
            var nombre = document.getElementById("nombre").value;
            var deportesSeleccionados = [];
            
            // Obtener todos los checkboxes seleccionados
            var deportes = document.querySelectorAll('input[name="deporte"]:checked');
            
            // Guardar los deportes seleccionados en un array
            deportes.forEach(function(deporte) {
                deportesSeleccionados.push(deporte.value);
            });
            
            // Mostrar resultados
            if (nombre === "" || deportesSeleccionados.length === 0) {
                alert("Por favor, ingrese su nombre y seleccione al menos un deporte.");
                return;
            }

            document.getElementById("resultado").innerHTML =
                "<h2>Resultado</h2>" +
                "<p><b>Nombre:</b> " + nombre + "</p>" +
                "<p><b>Cantidad de deportes que practica:</b> " + deportesSeleccionados.length + "</p>" +
                "<p><b>Deportes seleccionados:</b> " + deportesSeleccionados.join(", ") + "</p>";
        }
    </script>
</head>
<body>

    <h2>Formulario de Deportes</h2>
    <form onsubmit="event.preventDefault(); mostrarDeportes();">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" required><br><br>

        <label>Selecciona los deportes que practicas:</label><br>
        <input type="checkbox" name="deporte" value="Fútbol"> Fútbol<br>
        <input type="checkbox" name="deporte" value="Básquet"> Básquet<br>
        <input type="checkbox" name="deporte" value="Tenis"> Tenis<br>
        <input type="checkbox" name="deporte" value="Vóley"> Vóley<br><br>

        <input type="submit" value="Enviar">
    </form>

    <div id="resultado"></div>

</body>
</html>
