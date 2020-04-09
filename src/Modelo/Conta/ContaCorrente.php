<?php


namespace Alura\Banco\Modelo\Conta;


class ContaCorrente extends Conta
{
    public function transferir(Conta $contaDestino, float $valorATransferir): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}