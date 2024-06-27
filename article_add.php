<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple blog</title>
    <link rel="stylesheet" href=style.css>
</head><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple blog</title>
    <link rel="stylesheet" href=style.css>
</head>
<body>
<form action="save_article.php" method="post">
    <label for="title">Tytuł:</label>
    <input type="text" id="title" name="title" required><br>
    <label for="content">Treść:</label>
    <textarea id="content" name="content" required></textarea><br>
    <input type="submit" value="Dodaj artykuł">
</form>
</body>
</html>