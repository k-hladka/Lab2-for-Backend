<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Створення випадкового масиву</title>
</head>
<body>
<?php
include_once('function for task3_3/createArray.php');
$array = createArray();
foreach ($array as $value):
?>
<div>
    <?= $value ?>
</div>

<?php endforeach;?>
</body>
</html>

