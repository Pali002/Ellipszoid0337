<?php

echo file_get_contents('templates/head.html');


$page = file_get_contents('templates/calc.html');

function calcVolume($aside, $bside, $cside) {
    $volume = 4/3 * pi() * $aside * $bside * $cside;
    return $volume;
}

if(
    !empty($_GET['aside']) and 
    !empty($_GET['bside']) and 
    !empty($_GET['cside'])
) {
    $aside = $_GET['aside'];
    $bside = $_GET['bside'];
    $cside = $_GET['cside'];
    $volume = calcVolume($aside, $bside, $cside);    
}else {
    $volume = "Hiba! Helytelen bemenő adatok";
}

$page = str_replace('{{ result }}', $volume, $page);

echo $page;

echo file_get_contents('templates/foot.html');