<?php
function randNumber($x){
    $arr[0]=0;
    for($i=0; $i<$x; $i++)
        $arr[$i] = mt_rand(0,255);
    return $arr;
}
