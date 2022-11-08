<?php
function generatePet($number){
    $pet = '';
    match($number){
        1 => $pet = 'Кішка',
        2 => $pet = 'Собака',
        3 => $pet = "Хом'як",
        4 => $pet = 'Рибка',
        5 => $pet = 'Папуга',
    };
    return $pet;
}
