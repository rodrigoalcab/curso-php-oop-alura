<?php

namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Funcionario\AcessoPropriedades;

class Pessoa
{
    use AcessoPropriedades;
    protected $nome;
    protected $cpf;

    public function __construct($nome, $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome()
    {
        return $this->nome;
    }


    public function recuperaCpf()
    {
        return $this->cpf;
    }

    final protected function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "O nome precisa ter 5 caracteres";
            exit();
        }

    }




}