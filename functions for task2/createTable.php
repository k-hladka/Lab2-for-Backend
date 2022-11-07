<?php
include_once('randNumber.php');
function createTable($n, $m){
    $str = '<table>';
    for($i=0; $i<$n; $i++){
        $str.='<tr>';
        for($j=0; $j<$m; $j++){
            $arr = randNumber(3);
            $str.= "<td style='background-color:rgb($arr[0] $arr[1] $arr[2])'></td>";
        }
        $str.='</tr>';
    }
    $str.= '</table>';
    return $str;
}


