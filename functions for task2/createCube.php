<?php
include_once('randNumber.php');
function createCube($n){
    $str = '';
    for($i=0; $i<$n; $i++){
        $WidthHeight = randNumber(1, 5, 150);
        $top = randNumber(1, 0, 550);
        $left = randNumber(1, 0, 920);
        $str.="<div style ='
                    width: $WidthHeight[0]px;
                    height: $WidthHeight[0]px;
                    top:$top[0]px;
                    left: $left[0]px'>
               </div>";
    }
    return $str;
}