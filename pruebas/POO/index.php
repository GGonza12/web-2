<?php

class test
{

    public $numero = 15;
    public $palabra = 'Una palabra';

}
$num = new test();
$num->palabra= 'palabra reemplazada';

echo $num->palabra;

class player 
{

    public $nombre = 'player';
    public $vida = 10;
    public $fuerza = 1;
    

}
$player1 = new player();
$player1->nombre = 'Cloud';
$player1->vida = 999;
echo '<p>Nombre: ' .$player1->nombre. '</p>';
echo '<p>Vida:  ' .$player1->vida. '</p>';
echo '<p>Fuerza: ' .$player1->fuerza. '</p>';




