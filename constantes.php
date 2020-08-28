<?php

class Pessoa{
    const nome = "Mateus";


    public function exibirNome(){
        echo self::nome;
    }
}

class Mateus extends Pessoa{
    const nome="Lecchi";

    public function exibirNome(){
        echo parent::nome;
    }
}

$mateus= new Mateus();
$mateus->exibirNome();