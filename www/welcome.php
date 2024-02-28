<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos introducidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div>
            Los campos introducidos son:
        </div>
        <div>
            Nombre:
            <?php echo $_GET["username"] ?? ""; ?>
            <!-- ?? sirve para coger el username y, si es null, sustituir el  -->
        </div>
        <div>
            Email:
            <?php echo $_GET["email"] ?? ""; ?>
        </div>
    </div>
</body>

</html>