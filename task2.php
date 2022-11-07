<?php
error_reporting(~E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Створення таблиці</title>
    <link rel="stylesheet" href="task2.css">
</head>
<body>
<form method="post">
    <div>
        <label for="field1">Введіть кількість рядків</label>
        <input id="field1" name="field1" value="10">
    </div>
    <div>
        <label for="field2">Введіть кількість стовпців</label>
        <input id="field2" name="field2" value="5">
    </div>

    <button>Створити таблицю</button>
</form>
<div id="container">
    <?php
    include_once('functions for task2/createTable.php');
    echo createTable($_POST['field1'], $_POST['field2']);
    ?>
</div>
</body>
</html>
