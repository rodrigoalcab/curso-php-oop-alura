<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }


    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract function calculaBonificacao(): float;

    public function recebeAumento(float $valorDoAumento): void
    {
        if ($valorDoAumento < 0) {
            echo "Aumento deve ser positivo";
        } else {
            $this->salario += $valorDoAumento;
        }
    }



}