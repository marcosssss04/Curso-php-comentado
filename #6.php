<?php
////////////CONSTANTES///////////

define("NOME", "Marcos Aurelio"); //constantes 
define("IDADE", 28); // constantes
define("ALTURA", 1.89); // constantes
define("CASADO", true); // constantes

define("TIMES", ['vasco', 'flamengo', 'santos']);// constantes em array

echo 'Meu nome é '.NOME. 'e minha idade é '.IDADE.' e minha altura é '.ALTURA.'.'; // concatenando as constantes
echo "<hr>"; // criando uma linha
echo TIMES[0];
echo "<hr>";

function exibeNome() { // funçao para exibir as constantes 
    echo NOME;
}
exibeNome(); //  instanciando a classe