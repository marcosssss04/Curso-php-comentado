<?php

/*
$data = "09/04/2020";

$novaData = explode('/', $data); // transforma string em array

print_r($novaData);
*/

/*
$frase = "Meu nome nao é johnny";

$array = explode(" ", $frase);// transforma string em array

print_r($array);
*/

$nomes = array("marcos", "guilherme", "samuel", "fernanda");

$string = implode(", ", $nomes); //transforma array em string

echo $string;