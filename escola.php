<?php

class Escola
{
    public $nome = "Escola Técnica Sandoval Soares de Azevedo";
    public $cursos = "Informática, RH, Administração, Enfermagem";
    public $quantTurmas = 10;
    public $quantProfessores = 10;
    public $endereco = "R. Quarenta e Dois, 1-283 - Campos Filho, Ibirité - MG";

    public function especificar()
    {
        echo "Nome: {$this -> nome} <br>";
        echo "Cursos: {$this -> cursos} <br>";
        echo "Quantidade turmas: {$this -> quantTurmas} <br>";
        echo "Quantidade de professores: {$this -> quantProfessores} <br>";
        echo "Endereço: {$this -> endereco} <br>";
    }

    public function ensinar()
    {
        echo "<br>";
        echo "O dever da escola é ensinar!";
        echo "<br>";
    }

    public function profissionalizar()
    {
        echo "<br>";
        echo "A escola deve preparar o aluno para o mercado de trabalho.";
    }

}

$escola1 = new Escola();
$escola1 -> especificar();
$escola1 -> ensinar();
$escola1 -> profissionalizar();