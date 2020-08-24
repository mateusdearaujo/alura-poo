<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

$endereco = new Endereco('São Paulo', 'Grajaú', 'Piraju', '21-A');
$cpf = new Cpf("452.575.878-01");
$mateus = new Titular("Mateus de Araujo Soares", $cpf, $endereco);
$primeiraConta = new ContaCorrente($mateus);
$primeiraConta->depositar(3500);
$primeiraConta->saca(1000);

echo "Nome: {$primeiraConta->recuperaNomeTitular()}" . PHP_EOL;
echo "CPF: {$primeiraConta->recuperaCpfTitular()}" . PHP_EOL;
echo "Saldo da conta: {$primeiraConta->recuperarSaldo()}" .  PHP_EOL . PHP_EOL;