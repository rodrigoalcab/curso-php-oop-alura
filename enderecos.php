<?php


use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco('Cidade top', 'Algum bairro', 'rua legal', '13');

echo $endereco->cidade;
