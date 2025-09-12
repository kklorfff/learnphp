<?php
if ($i > 10){
    var_dump('bigger');
} elseif ($i == 10){
    var_dump('equals');
} else {
    var_dump('smaller');
}

$day = date('w' , strtotime('12.0.2025'));

var_dump($dayy == 1) {

if ($day == 1)
    var_dump('Esmaspäev');
} elseif ($i == 2){
    var_dump('Teispäev');
} elseif ($i == 3){
    var_dump('Kolmapäev');
} elseif ($i == 4){
    var_dump('Neljapäev');
} elseif ($i == 5){
    var_dump('Reede');
} elseif ($i == 6){
    var_dump('Laupäev');
} else {
    var_dump('Pühapäev');
}

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4
        var_dump('Neljapäev');
        break;
    case 5
        var_dump('Esmaspäev');
        break
    case 6
        var_dump('Pidupäev'); 
        break;
    case 7
        var_dump('Pühapäev');
        break;
    default:
    var_dump('Imelik päev');
}