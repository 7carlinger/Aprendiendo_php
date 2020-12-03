<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <h2>Ejemplo de uso de la variable get</h2>
    <form method = "GET" action = "recibir.php"/>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </div>
        <input type="submit" value="enviar datos"/>
    </form>
</body>
</html>