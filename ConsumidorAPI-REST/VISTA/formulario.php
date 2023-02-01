<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Pais</title>
</head>
<body>
    <h2>Consultar informacion COVID sobre un Pais</h2>
    <p>Introduzca el nombre del pais que desea buscar:</p>
    <form action="CONTROL/Controlador.php" method="POST">
        <input type="text" placeholder="Nombre del pais" id="nombrePais" name="nombrePais">
       <button type="submit">Consultar</button>
    </form>
</body>
</html>

