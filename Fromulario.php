<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Ingrese la Pregunta</h1>
        <form action="guardar_cuestionario.php" method="post">
            <label for="pregunta">Pregunta:</label>
            <input type="text" name="pregunta" required>
            <br>
            <label for="respuesta">Respuesta:</label>
            <input type="text" name="respuesta" required>
            <br>
            <input type="submit" name="agregar" value="Agregar Pregunta">
        </form>
    </div>
</body>
</html>

