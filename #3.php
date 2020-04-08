<?php
       //////////////////////////////// tipos de dados /////////////
                                //escalares

$nome = 12;

var_dump($nome);

//condiçao para verificar se é uma string
if(is_string($nome)): // verifica se é uma string
    echo "é uma string";
else:
    echo "nao é uma string";
endif;   
echo "<hr>";

//int 
$idade = "ola mundo";
var_dump($idade);
if(is_int($idade)): // verificando se inteiro
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";    

//float 
$altura = 1.77;
var_dump($altura);
if(is_float($altura)): // verificando se é um float
    echo "É um float";
else:
    echo "Não é um float";
endif;   
echo "<hr>"; 

$admin = true;
var_dump($admin);
if(is_bool($admin)): //verificando se é um booleano
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";    

///////////////////Compostos/////////////////

$carros = array("Gol", "Uno", "Camaro",12,20.6,true); // arrays com varios valores
var_dump($carros);
if(is_array($carros)): // verificando se é uma array
    echo "è uma array";
else:
    echo "Não é uma array";
endif;
echo "<hr>";    

/////////////object///////////

class Clientes { //classe
    public $nome; //atributo
    public function atribuirNome($nome){ //metodo
        $this->nome = $nome;
    }
}

$cliente = new Clientes(); // instaciar classe
$cliente->atribuirNome("Marcos"); // atribuindo nome
var_dump($cliente);

if(is_object($cliente)): // verificando se é um objeto
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";  

///////////Especiais////////////
$cidade = NULL;
var_dump($cidade);
echo "<hr>";

//////resource////////
