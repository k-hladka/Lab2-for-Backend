<?php
include_once('functions for task2/randNumber.php');
include_once('generatePet.php');
function getName($namePet){
    $result = [];
    $arrayLength = count($namePet);
    $rand = randNumber($arrayLength, 1, 5);
    for($i=0; $i<$arrayLength; $i++){
        $result[$i] = '<span style="color:mediumvioletred">'. generatePet($rand[$i]) . '</span>'. ' : ' . $namePet[$i];
    }
    return $result;
}
