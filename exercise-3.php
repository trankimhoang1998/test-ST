<?php
function mixArray($a,$b){
    $num=array_unique(array_merge($a,$b));
    array_multisort($num,SORT_ASC,SORT_NUMERIC);
    return($num);
}

$a=[2,6,0,4,-8];
$b=[4,9,2,9];
print_r(mixArray($a,$b));