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
    <title>Вивидення елементів масиву, що повторюються</title>
</head>
<body>
<form method="post">
    <label for="array">Введіть елементи масиву через кому</label>
    <input type="text" id="array" name="array" value="1, 2, 3, 4, 1, 2">
    <button>Отримати</button>
</form>
<?php
echo 'Масив був : ';
print_r($_POST['array']);
echo '<br> Масив став : ';
$ar = repeatElement($_POST['array']);
print_r($ar);

function repeatElement($str){
    $array = breakIntoArray($str);
    $arrayLength = count($array);
    $resArray = [];

    for($i=0; $i<$arrayLength; $i++){
        if(!isset($array[$i]))
            continue;
        $z=0;
        for($j=$i+1; $j<$arrayLength; $j++){
            if(!isset($array[$j]))
                continue;

            if($array[$i] === $array[$j] && $z===0){
                $resArray[] = $array[$i];
                unset($array[$j]);
                $z=1;
            }
            elseif($array[$i] === $array[$j] && $z===1)
                unset($array[$j]);
        }
    }
    return $resArray;
}

function breakIntoArray($str){
    $array = explode(',', $str);
    for($i=0; $i<count($array); $i++){
        $array[$i] = trim($array[$i]);
    }
    return $array;
}
?>
</body>
</html>
