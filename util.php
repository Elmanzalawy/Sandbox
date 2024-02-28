<?php

$arrayInt = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arrayStr = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
$arrayStr2 = array_keys($arrayStr);

// An array that represents a possible record set returned from a database
$arrayMulti = array(
    array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
    )
);


$GLOBALS['outputCalls'] = 0;
function output($array)
{
    print_r(json_encode($array)) . PHP_EOL;
    echo '<hr>';
    $GLOBALS['outputCalls']++;
}

/**
 * Return first doc comment found in this file.
 *
 * @return string
 */
function getDocs()
{
    $docComments = array_filter(
        token_get_all( file_get_contents('index.php')), function($entry) {
            return $entry[0] == T_DOC_COMMENT;
        }
    );
    $fileDocComment = array_shift($docComments);
    echo $fileDocComment[1];
}