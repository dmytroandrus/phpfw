<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Произошла ошибка</h1>
    <p><b>Код: </b><?=$errno?></p>
    <p><b>Текст: </b><?=$errstr?></p>
    <p><b>Файл: </b><?=$errfile?></p>
    <p><b>Строка: </b><?=$errline?></p>
</body>
</html>
