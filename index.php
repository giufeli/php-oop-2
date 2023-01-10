<?php

include_once __DIR__ . '/products.php';
include_once __DIR__ . '/user.php';
include_once __DIR__ . '/carta.php';

$crocchette = new products('Crocchette', 'Alimentare', '1,50€', 'Gatti');
$umido = new products('Umido', 'Alimentare', '2€', 'Cani');
$pallina = new products('Pallina Rossa', 'Gioco', '3€', 'Cani/Gatti');
$acquario = new products('Acquario', 'Ambient', '80€', 'Pesci');

var_dump($crocchette);
var_dump($pallina);

$carta = new Carta ('1234 1234 1234 1234', 123, 'test');

$user = new User('Mario', 'Rossi', 'mariorossi@gmail.com', true, $carta);
var_dump($user);
