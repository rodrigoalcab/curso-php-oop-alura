<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;

$endereco = new Endereco("Cidade legal", "bairro top", "Rua bem longe", "14");
$maria = new Titular(new Cpf("123.456.789.-10"), "Maria", $endereco);
$primeiraConta = new ContaCorrente($maria);

echo Conta::retornaNumeroDecontas();

$primeiraConta->depositar(500);
$primeiraConta->sacar(100);

echo $primeiraConta->recuperaSaldo();
