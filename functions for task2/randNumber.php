<?php
function randNumber($x, $min, $max){
    $arr[0]=0;
    for($i=0; $i<$x; $i++)
        $arr[$i] = mt_rand($min, $max);
    return $arr;
}
