<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Робота з функціями</title>
    <link rel="stylesheet" href="task1.css">
</head>
<body>
<table>
    <tr>
        <th>x<sup>y</sup></th>
        <th>x!</th>
        <th>my_tg(x)</th>
        <th>sin(x)</th>
        <th>cos(x)</th>
        <th>tg(x)</th>
        <th>x+y</th>
        <th>x-y</th>
        <th>x*y</th>
        <th>x/y</th>
        <th>average(x,y)</th>
    </tr>
    <tr>
        <?php
        include_once('functions for task1/pow.php');
        include_once('functions for task1/factorial.php');
        include_once('functions for task1/my_tg.php');
        ?>
        <td>
            <?= powFunc($_POST['field1'], $_POST['field2']); ?>
        </td>
        <td>
            <?= factorial($_POST['field1']); ?>
        </td>
        <td>
            <?= my_tg($_POST['field1']); ?>
        </td>
        <td>
            <?= sin(floatval($_POST['field1']));?>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>

<form method="post">
    <div>
        <label for="field1">x</label>
        <label for="field2">y</label>
    </div>
    <input type="text" id="field1" name="field1" value="4">
    <input type="text" id="field2" name="field2" value="3">
    <button type="submit">=</button>
</form>
</body>
</html>