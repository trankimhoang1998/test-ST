<?php
function threeAndFour($n){
    $result=[];
    for($x=0;$x<=$n;$x++){
        if($x%3==0 and $x%4==0){
            array_push($result,$x);
        }
    }
    return $result;
}

print_r(threeAndFour(30));