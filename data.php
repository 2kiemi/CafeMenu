<?php
require_once('drink.php');
require_once('food.php');


$juice= new Drink('JUICE');
$coffee= new Drink('COFFE');
$curry = new Food('CURRY');
$pasta = new Food('PASTA');

$menus=array($juice, $coffee, $curry, $pasta);

?>