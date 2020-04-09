<?php


namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalDeBonificacoes;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalDeBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalDeBonificacoes;
    }
}