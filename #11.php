<?php

/////////// array values //////
/*
$nomes = array("pai"=>"Marcos", "mae"=>"fernanda", "filho1"=> "guilherme", "filho2"=> "samuel");

$values = array_values($nomes); // pegando somente os valores e colocando indice numnericos
print_r($values);
*/

/*
////////array merge /////////////
$carros = array("camaro", "uno", "gol");
$motos = array("pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos); // funçao para juntar ou fundir  os arrays
print_r($veiculos);
*/

/*
/////////array pop exclui a ultima posiçao do array ///////////////
$carros = array("camaro", "uno", "gol");
print_r($carros);
echo "<br">
array_pop($carros); /// apaga a ultima posiçao do array
echo "<br>";
echo array_pop($carros);
print_r($carros);
*/

////// array shift exclui a primeira posiçao do array

$motos = array("biz", "cb 250", "kawasak", "ducati");
print_r($motos);
echo "<br>";
array_shift($motos); // excluindo a primeira posiçao do array
echo "<br>";
print_r($motos);
echo "<br>";
echo array_shift($motos);