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
    <title>Квадратики в випадковому розмірі</title>
    <link rel="stylesheet" href="task2_2.css">
</head>
<body>
<form method="post">
    <label for="countCube">Введіть кількість квадратиків</label>
    <input type="text" id="countCube" name="countCube" value="10">
    <button>OK</button>
</form>
<?php
include('functions for task2/createCube.php');
echo createCube($_POST['countCube']);
?>
</body>
</html>
