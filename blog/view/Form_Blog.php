<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <form action="../controller/Transactions.php" method="post" enctype="multipart/form-data">
        <label>Titulo: <input type="text" name="title"></label><br><br>
        <label>Comentario: </label><br>
        <textarea name="comment"></textarea><br><br>
        <input type="file" name="image"><br>
        <label>La imagen no debe ser mayor a 2MB</label> <br><br>
        <input type="submit" value="Enviar">
        <a href="Show_Blog.php">Visualizar BLOG</a>
    </form>
</body>
</html>
