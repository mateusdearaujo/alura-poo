<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('São Paulo', 'Grajaú', 'Pi
compraju', '21-A');
$cpf = new Cpf("477.899.638-05");
$mateus = new Titular("Mateus de Araujo Soares", $cpf, $endereco);
$primeiraConta = new Conta($mateus);
$primeiraConta->depositar(3500);

$cpf = new Cpf("195.698.595-05");
$jenifer = new Titular("Jenifer Boeno", $cpf, $endereco);
$segundaConta = new Conta($jenifer);
$segundaConta->depositar(7800);

echo "Nome: {$primeiraConta->recuperaNomeTitular()}" . PHP_EOL;
echo "CPF: {$primeiraConta->recuperaCpfTitular()}" . PHP_EOL;
echo "Saldo da conta: {$primeiraConta->recuperarSaldo()}" .  PHP_EOL . PHP_EOL;

echo "Nome: {$segundaConta->recuperaNomeTitular()}" . PHP_EOL;
echo "CPF: {$segundaConta->recuperaCpfTitular()}" . PHP_EOL;
echo "Saldo da conta: {$segundaConta->recuperarSaldo()}" .  PHP_EOL;

echo PHP_EOL . "Quantidade de Contas: " . Conta::recuperaNumeroDeContas() . PHP_EOL;