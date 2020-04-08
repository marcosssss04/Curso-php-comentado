<?php

////////// Arrays associativos //////

$pessoa = array("nome"=> "Marcos", "idade" => 23, "altura" => 1.75); // array associado
$pessoa["cidade"] = "Rio de janeiro"; // adicionando elementos no array

foreach($pessoa as $indice => $valor){ // percorrendo o array
    echo $indice.":".$valor."<br>"; // concatenando o array
}

echo "<hr>";

// Array multidimendionais
$times = array(
    "cariocas" => array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
    "paulistas" => array("santos", "sao paulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "itabuna")
);
//echo $times["cariocas"][0];

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["paulistas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["baianos"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}