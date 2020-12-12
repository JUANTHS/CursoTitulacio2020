<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario HTML & PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
    <!-- Formulario -->
    <div class="column is-half is-offset-one-quarter">
        <form action="servidor.php" method="post">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">

            <label for="correo">Correo Electrónico</label>
            <input type="email" name="correo" id="email">

            <input type="submit" value="Enviar">

        </form>
        <form action="servidor.php" method="get">

            <label for="producto">Nombre del producto</label>
            <input type="text" name="producto">

            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad">

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>