<?php
include_once('functions for task2/randNumber.php');
function createArray(){
    $arrayLength = randNumber(1, 3, 7);
    return randNumber($arrayLength[0], 10, 20);
}