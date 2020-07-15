<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." anos acabou de falar";
    }
}

$mateus = new Pessoa();
$mateus->nome = "Mateus Nossa Lecchi";
$mateus->idade = 25;
$mateus->Falar();
