<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$desenvolvedor = new Gerente('Marcos',
    new Cpf('123.456.789-10'),
    '10000'
);

$autenticador->tentaLogin($desenvolvedor, '4321');
