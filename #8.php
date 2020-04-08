<?php

//////array #2 funçao Count /////// //// arrays numericos ///////

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux"); // array com indice
// $carros = array("BMW", "Veloster", "Hilux"); array sem indice
$carros[] = "Amarok"; //inserindo no array
$carros[10] = "Camaro"; // adicionando o indice
echo $carros[10]; // printando com indice 0 ao 2
echo "<hr>"; // adiciona uma linha

$motos = array(); // outra fomra de fazer um array
$motos[] = "Yamaha"; // valores do array
$motos[] = "Honda"; // valores do array
$motos[5] = "Suzuki"; // valores do array
//print_r($motos); //exibindo na tela
echo $motos[5]; // imprimindo na tela o indice 5
echo "<hr>"; // adiciona uma linha

$clientes = ["Marcos", "samuel", "Guilherme", "Fernanda"]; // array clientes
print_r($clientes);
echo "<hr>"; // adiciona uma linha 

//Count serve para contar quantos itens tem em um array
$totalClientes =  count($clientes); // adicionando o valor da array em uma variavel
echo $totalClientes; // exibindo valor da variavel $totalClientes
echo "<hr>"; // adiciona uma linha

// foreach
foreach($carros as $valor){ // adicionando os elementos da variavel $carros no $valor
    echo $valor."<br>"; // exibindo elementos da varial $carros
}
echo "<hr>";//adiciona uma linha

foreach($motos as $elementos){ //adicionando valores da variavel $motos a variavel $elementos
    echo $elementos."<br>"; // exibindo elemento da variavel $motos na variavel $elementos
}
echo "<hr>";//adiciona uma linha

foreach($clientes as $pessoas) { // adicionando elementos da variavel $clientes a variavel $pessoas
    echo $pessoas."<br>";//adiciona uma linha 
}
echo "<hr>";//adiciona uma linha