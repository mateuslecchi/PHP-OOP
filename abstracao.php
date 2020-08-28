<?php

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo=$s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);    
}

class Itau extends Banco {
    
    public function Sacar($s) {
        $this->saldo -= $s;
    }

    public function Depositar($d) {
        $this->saldo += $d;
    }

}

$itau = New Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau-getSaldo();
