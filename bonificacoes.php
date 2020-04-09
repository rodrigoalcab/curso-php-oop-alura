<?php

require 'autoload.php';


use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umaFuncionaria = new EditorVideo('Patrícia',
    new Cpf('987.654.321-10'),
    '3000');

$umFuncionario = new Gerente('Paulo',
    new Cpf('123.456.789.-10'),
    '15000');

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umFuncionario);
echo $controlador->recuperaTotal();