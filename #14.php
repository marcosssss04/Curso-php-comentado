<?php 

////////condiçoes //////
$numero = 90;

if($numero == 10):
    echo "È igual a 10";
elseif($numero <= 9):
    echo "È menor ou igual a 9";
else:
    echo "È diferente de 10";
endif;

echo "<hr>";

$media =7;

echo ($media <= 6) ? "Aprovado!" : "Reprovado!"; // operador ternario if else