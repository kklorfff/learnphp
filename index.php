<?php
$array = array(1, 2, 3);

var_dump($array);

$array = array(1, 2, 3);
var_dump($array);

$array = [
    'Hello',
    true,
    [1, 2, 3],
    3.4,
];
var_dump($array);

$array = [
    'name' => 'Kirill',
    'age' => '18',
];

var_dump($array);

$array = [
    1,
    true,
    'name' => 'Kirill',
    'age' => '18',
    100 => 4,
    5,
    6.3,
    NULL,
];

var_dump($array);
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
var_dump($array[2][1]);