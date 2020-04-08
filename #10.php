<?php

/*///// is_array verifica se uma determinada variavel é um array
$nomes = array("marcos", "samuel", "guilherme");

if(is_array($nomes)):
    echo "È um array ";
else:
    echo "Não é um array";
endif;
*/  



/////////in_array verifica se um determinado valor existe em uma array

/*
$nomes = array("marcos", "guilher", "fernanda", "samuel");

if(in_array("aurelio", $nomes)): // verificando se exite valor no array
    echo "Existe no array";
else:
    echo "Nao existe";
endif; 
*/

////////// array_keys retorna um novo array com as chaves do aray passando como parametro

$nomes = array("pai"=>"marcos", "mae"=>"fernanda", "filho1"=>"guilherme", "filho2"=>"samuel");

$keys = array_keys($nomes); // criando array com os indices e valores
print_r($keys);