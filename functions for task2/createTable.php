<?php
function createTable($n, $m){
    $str = '<table>';
    for($i=0; $i<$n; $i++){
        $str.='<tr>';
        for($j=0; $j<$m; $j++){
            $arr = randNumber();
            $str.= "<td style='background-color:rgb($arr[0] $arr[1] $arr[2])'></td>";
        }
        $str.='</tr>';
    }
    $str.= '</table>';
    return $str;
}

function randNumber(){
    for($i=0; $i<3; $i++)
        $arr[$i] = mt_rand(0,255);
        return $arr;
}
