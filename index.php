<?php
require 'util.php';


/**
 * ------------------------------------------------------
 * array_change_key_case()
 * @param array $array
 * @param boolean 0|1
 * @return array
 * changes all keys in an array to lowercase or uppercase.
 * ------------------------------------------------------
 */
$upperCase = array_change_key_case($arrayStr, CASE_LOWER);
$lowerCase = array_change_key_case($arrayStr, CASE_UPPER);
output($upperCase);
output($lowerCase);


/**
 * ------------------------------------------------------
 * array_chunk()
 * @param array $array
 * @param integer $size
 * @param bool $preserve_key
 * @return array
 * Split an array into chunks of new arrays
 * ------------------------------------------------------
 */
output(array_chunk($arrayInt, 3));
output(array_chunk($arrayStr, 3, true));


/**
 * ------------------------------------------------------
 * array_column()
 * @param array $array
 * @param integer|string|null $columnKey
 * @param bool $preserve_key
 * @return array
 * returns the values from a single column in the input array, used for multidimensional Arrays.
 * ------------------------------------------------------
 */
output(array_column($arrayMulti, 'last_name'));


/**
 * ------------------------------------------------------
 * array_combine()
 * @param array $array
 * @param array $array
 * @return array
 * returns an array by using the elements from one "keys" array and one "values" array
 * both arrays  must have the same number of elements.
 * ------------------------------------------------------
 */
output(array_combine($arrayStr2, [35, 55, 23]));
