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
include_once('functions for task2/randNumber.php');
function createArray(){
    $arrayLength = randNumber(1, 3, 7);
    return randNumber($arrayLength[0], 10, 20);
}
$array = createArray();
foreach ($array as $value):
?>
<div>
    <?= $value ?>
</div>

<?php endforeach;?>
</body>
</html>

