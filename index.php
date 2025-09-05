<?php

$bool = true && false; 
var_dump($bool);
$bool = true || false;
var_dump($bool);
$bool = !false;
var_dump($bool);
$bool = (true || false && true) && (!false || false && true);
var_dump($bool);
$bool = 10 > 4;
$bool = 10 < 4;
$bool = 10 > 10;
$bool = 10 < 10; 
$bool = 10 == 10;
$bool = 10 == '10';
$bool = 10 === '10';
$bool = 10 != '10';
$bool = 10 !== '10';
$bool = 10 <= '10';
$bool = 10 >= '10';
var_dump($bool);
