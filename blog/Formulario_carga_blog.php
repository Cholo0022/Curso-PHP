<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
</head>
<body>
    <form action="insertar_contenido.php" method="post">
        <label>Titulo: <input type="text" name="titulo"></label><br>
        <label>Comentario: <textarea name="comentario" id="comentario"></textarea></label><br>
        <label>Cargar imagen: <input type="file" name="imagen" id="imagen"> </label><br>
        <input type="submit" value="Cargar">
    </form>
</body>
</html>