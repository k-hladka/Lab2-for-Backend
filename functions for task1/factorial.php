<?php
function factorial($x){
        $res=1;
        for($i=$x; $i>=2; $i--)
            $res*=$i;
        return $res;
}
