<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include_once('function for task3_3/arrayOperations.php');
include_once('function for task3_3/createArray.php');
$array = arrayOperations(createArray(), createArray());

foreach ($array as $value):
?>
<div>
    <?= $value;?>
</div>
<?php endforeach;?>
</body>
</html>
