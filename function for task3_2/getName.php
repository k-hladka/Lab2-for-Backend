<?php
function getName($namePet){
    $result = [];
    $arrayLength = count($namePet);
    $rand = randNumber($arrayLength, 1, 5);
    for($i=0; $i<$arrayLength; $i++){
        $result[$i] = generatePet($rand[$i]) . ' : ' . $namePet[$i];
    }
    return $result;
}
