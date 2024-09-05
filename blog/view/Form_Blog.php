<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <form action="../controller/Transactions.php" method="post">
        <label>Titulo: <input type="text" name="titulo"></label><br><br>
        <label>Comentario: </label><br>
        <textarea name="comentario"></textarea><br><br>
        <input type="file" name="imagen"><br>
        <label>La imagen no debe ser mayor a 2MB</label> <br><br>
        <input type="submit" value="Enviar">
        <a href="http://">Visualizar BLOG</a>
    </form>
</body>
</html>