<?php
/////////ESCOPO DE VARIAVEL///////////

// Variavel escopo global
$nome = "Marcos aurelio";
$a = 1; 
$b = 3;
$c = 7;

function exibeNome() { // funcçao
    global $nome; // funçao global para variaveis globals
    echo $nome;
}

exibeNome();// instanciando a classe
echo "<hr>"; // tag para criar uma linha

/////////////////// 
function exibeCidade() { //funçao 
    // variavel escopo local
    global $cidade; // definindo variavel local como global
    $cidade = "Rio de janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";// tag para criar uma linha
/////////////////////

function soma() { //funçao de somar

    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; // array GLOBALS 
}
soma(); // instaciando a classe 


