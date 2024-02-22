<?php

/**
 * Given an input string of 4 comma separated integers "a1,b1,a2,b2"
 * return the float value of (a1/b1) / (a2/b2) rounded to the 2 nearest digits.
 */

$input = "5,12,512,1204";
$arr = explode(',', $input);

$a1 = $arr[0];
$b1 = $arr[1];
$a2 = $arr[2];
$b2 = $arr[3];

$output = ($a1 / $b1) / ($a2 / $b2);

echo round($output, 2);
