<?php

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf, Funcionario};

require_once 'autoload.php';

$nome = "Mateus Araujo";
$cpf = new Cpf('123.123.123-12');
$cargo = "Desenvolvedor";
$salario = 6800;
$umFuncionario = new Funcionario($nome, $cpf, $cargo, $salario);
$umFuncionario->calculaBonificacao();

$nome = "Camila Silva";
$cpf = new Cpf('123.123.123-12');
$cargo = "Desenvolvedora Node";
$salario = 9000;
$umaFuncionaria = new Funcionario($nome, $cpf, $cargo, $salario);
$umaFuncionaria->calculaBonificacao();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo "Nome: " . $umFuncionario->recuperaNome() . PHP_EOL;
echo "Cpf: " . $umFuncionario->recuperaCpf() . PHP_EOL;
echo "Cargo: " . $umFuncionario->recuperaCargo() . PHP_EOL;
echo "Salário: " . $umFuncionario->recuperaSalario() . PHP_EOL;
echo "Bonificação: " . $umFuncionario->calculaBonificacao() . PHP_EOL . PHP_EOL;

echo "Nome: " . $umaFuncionaria->recuperaNome() . PHP_EOL;
echo "Cpf: " . $umaFuncionaria->recuperaCpf() . PHP_EOL;
echo "Cargo: " . $umaFuncionaria->recuperaCargo() . PHP_EOL;
echo "Salário: " . $umaFuncionaria->recuperaSalario() . PHP_EOL;
echo "Bonificação: " . $umaFuncionaria->calculaBonificacao() . PHP_EOL . PHP_EOL;

echo "Total de Bonificações: {$controlador->recuperaTotal()}" . PHP_EOL;