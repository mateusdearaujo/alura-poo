<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa {
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario) {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string {
        return $this->cargo;
    }

    public function alteraNome(string $nome) {
        $this->validaNomeTitular($nome);
        $this->nome;
    }

    public function recuperaSalario(): float {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}