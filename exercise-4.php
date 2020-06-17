<?php

function crossingSum($matrix, $a, $b)
{
    $result = 0;
    $result_a = 0;
    $result_b = 0;

    for ($x = 0; $x < count($matrix[0]); $x++) {
        $result_a += $matrix[$a][$x];
    }

    for ($x = 0; $x < count($matrix); $x++) {
        $result_b += $matrix[$x][$b];
    }

    $result = $result_a + $result_b - $matrix[$a][$b];

    return $result;
}

$matrix = [[1, 1, 1, 1],
    [2, 2, 2, 2],
    [3, 3, 3, 3]];

$a = 1;
$b = 2;

print_r(crossingSum($matrix, $a, $b));

