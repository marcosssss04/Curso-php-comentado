<?php

class Pessoa { //classe principal
    public $nome; //atributo publico
    public $idade; //atributo publico

    public function Falar() { //Metodo Falar
        //echo "Falou <br>";
        echo $this->nome." de ".$this->idade." acabou de falar"; //exibir nome dentro do metodo falar
    }
}

$marcos = new Pessoa(); // instanciar classe
$marcos->nome = "Marcos aurelio cardoso"; // adicionando nome ao atributo $nome
$marcos->idade = 28; // adicionando idade ao atributo $idade
$marcos->Falar(); // utilizando o metodo Falar

//echo $marcos->nome; // exibir nome

