<?php
include "./php/food-class.php";

$file = fopen("./files/foods.csv", 'r');

$foods = array();
$i = 0;

while(list($name, $hunger, $health, $sanity, $spoil, $cooking, $exclusive) = fgetcsv($file,1024,','))
{
    $food = new Food($i, $name, $hunger, $health, $sanity, $spoil, $cooking, $exclusive);
    $foods[$i] = $food;

    $i++;
}

function hungerAsc($a, $b) {
    return $a->hunger < $b->hunger;
}
function hungerDes($a, $b) {
    return $a->hunger > $b->hunger;
}
function healthAsc($a, $b) {
    return $a->health < $b->health;
}
function healthDes($a, $b) {
    return $a->health > $b->health;
}
function sanityAsc($a, $b) {
    return $a->sanity < $b->sanity;
}
function sanityDes($a, $b) {
    return $a->sanity > $b->sanity;
}
function nameAsc($a, $b) {
    return $a->name > $b->name;
}
function nameDes($a, $b) {
    return $a->name < $b->name;
}