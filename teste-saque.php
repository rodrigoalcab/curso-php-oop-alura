<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;


$conta = new ContaCorrente(
    new Titular(
        new Cpf('117.025.337-78'),
        'Rodrigo',
        new Endereco('Primavera', 'Centro', 'Manaus', '1780')
    ), '2'
);

$conta->depositar(500);
$conta->sacar(100);
echo $conta->recuperaSaldo();
