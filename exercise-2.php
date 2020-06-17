<?php
function magicalWell($a,$b,$n){
    $result=0;
    while($n!=0){
        $result+=$a*$b;
        $a++;
        $b++;
        $n--;
    }
    return $result;
}

print_r(magicalWell(1,2,2));