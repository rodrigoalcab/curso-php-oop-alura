<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{

    private $titular;
    protected $saldo;
    private static $numeroDeContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) :void
    {

        $tarifaSaque = $valorASacar * $this->percentualTarifa();

        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
            $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "O valor precisa ser maior do que zero";
            return;
        }
            $this->saldo += $valorADepositar;
    }

    public static function retornaNumeroDecontas() : int
    {
        return self::$numeroDeContas;
    }

    public function recuperaSaldo() : int
    {
        return $this->saldo;
    }

    abstract protected function percentualTarifa(): float;
}

