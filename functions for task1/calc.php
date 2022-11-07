<?php
function calc($operator, $x, $y){
    $x = (int)$x;
    $y = (int)$y;
    switch($operator){
        case '+' : return $x+$y;
        case '-' : return $x-$y;
        case '*' : return $x*$y;
        case '/' :
            if($y !== 0)
                return $x/$y;
            else
                return 'Error: y = 0';
        default : return 0;
    }
}
