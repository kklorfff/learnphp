<?php

function hello() {
    var_dump('hello');
}

hello();
hello();
hello();
hello();

function helloName($name) {
    var_dump("Hello $name");
}

helloName('Kirill');
helloName('Potapov');
helloname();

function sum($a, $b) {
    return $a+$b; 
}

var_dump(sum(1, 4));
$answer = sum(6, 5);

function biggerThanTen($n) {
    if($n > 10) {
        return 'Bigger';
    }
    return 'Smaller';  
    var_dump('asdasdad');//never runs   
}

var_dump(biggerThanTen(11));
var_dump(biggerThanTen(4));

function anything(...$args){
    var_dump($args);
}
anything(1, 2, 3, 4, 5);//many times as u want

function recursive($n){
    if($n<10){
        var_dump($n);
        recursive($n+1);
    }
} 
recursive(0);