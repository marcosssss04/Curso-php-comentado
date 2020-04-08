<?php
////////////// Arrays #1 /////////

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux"); // array com indice
// $carros = array("BMW", "Veloster", "Hilux"); array sem indice
$carros[] = "Amarok"; //inserindo no array
$carros[10] = "Camaro"; // adicionando o indice
echo $carros[10]; // printando com indice 0 ao 2
echo "<hr>"; // adiciona uma linha

$motos = array(); // outra fomra de fazer um array
$motos[] = "Yamaha"; // valores do array
$motos[] = "Honda"; // valores do array
$motos[5] = "Suzuki";
//print_r($motos); //exibindo na tela
echo $motos[5]; // imprimindo na tela o indice 5
echo "<hr>"; // adiciona uma linha

$clientes = ["Marcos", "samuel", "Guilherme", "Fernanda"];
print_r($clientes);
echo "<hr>"; // adiciona uma linha 


