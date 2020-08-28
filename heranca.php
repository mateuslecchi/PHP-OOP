<?php

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 321";
    }
    
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau";
    }
    
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();

echo "<br>";

$carro->ligarLimpador();


echo "<br>";


$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Rosa";
$moto->ano = 2020;
$moto->Parar();

echo "<br>";

$moto->darGrau();
