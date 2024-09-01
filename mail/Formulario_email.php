<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="enviar_mail.php" name="formulario" method="post">
        <label>Nombre: <input type="text" name="nombre" id="nombre"></label><br>
        <label>Apellido: <input type="text" name="apellido" id="apellido"></label><br>
        <label>Mail: <input type="email" name="mail" id="mail"></label><br>
        <label>Asunto: <input type="text" name="asunto" id="asunto"></label><br>
        <label>Comentario: <input type="textarea" name="comentario" id="comentario"></label><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>