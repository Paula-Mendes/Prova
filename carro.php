<?php

class Carro
{
    public $marca = "Fiat";
    public $modelo = "Uno Mille Way";
    public $anoFabricacao = 2011;
    public $quantPortas = 4;
    public $cor = "Vermelho";

    public function dadosVeiculo()
    {
        echo "Marca: {$this -> marca} <br>";
        echo "Modelo: {$this -> modelo} <br>";
        echo "Fabricação: {$this -> anoFabricacao} <br>";
        echo "Qauntidade de portas: {$this -> quantPortas} <br>";
        echo "Cor: {$this -> cor} <br>";
        echo "<br>";
    }

    public function andar()
    {
        echo "Carro andando!";
        echo "<br>";
    }

    public function fazerBarulho()
    {
        echo "<br>";
        echo "Vruuuuuum!";
       
    }

}

$carro1 = new Carro();
$carro1 -> especificar();
$carro1 -> andar();
$carro1 -> fazerBarulho();