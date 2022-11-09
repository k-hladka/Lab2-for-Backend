<?php
function arrayOperations($arrayOne, $arrayTwo){
    //об'єднання
    $arrayMerge = array_merge($arrayOne, $arrayTwo);
        $arrayLength = count($arrayMerge);

    //Видалення однакових фрагментів
        for($i=0; $i<$arrayLength; $i++) {
            if (!isset($arrayMerge[$i]))
                continue;
            for ($j = $i + 1; $j < $arrayLength; $j++) {
                if (!isset($arrayMerge[$j]))
                    continue;

                if ($arrayMerge[$i] === $arrayMerge[$j])
                    unset($arrayMerge[$j]);
            }
        }

        //Сортування
    for($i=0; $i<$arrayLength; $i++) {
        if (!isset($arrayMerge[$i]))
            continue;
        for ($j = $i + 1; $j < $arrayLength; $j++) {
            if (!isset($arrayMerge[$j]))
                continue;

            if ($arrayMerge[$i] > $arrayMerge[$j]){
                $tmp= $arrayMerge[$i];
                $arrayMerge[$i] = $arrayMerge[$j];
                $arrayMerge[$j] = $tmp;
            }
        }
    }

    return $arrayMerge;
}