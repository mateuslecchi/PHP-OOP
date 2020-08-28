<?php


class Veiculo{
    private $modelo;
    public $cor;
    public $ano;

    protected function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function setModelo($m){
        $this->modelo=$m;
    }

    public function getModelo(){
        return $this->modelo;
    }

    

    
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 321";
    }

    public function mostrarAcao(){
        $this->Andar();
    }
    
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau";
    }
    
}

$carro =new Carro();
$carro->mostrarAcao();