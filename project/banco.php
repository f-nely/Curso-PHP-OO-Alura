<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Petrópolis', 'um bairro', 'uma rua', '71B');
$primeiraConta = new ContaCorrente(new Titular(new Cpf('154.885.340-24'), 'Vinícius Dias', $endereco));
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new ContaPoupanca(new Titular(new Cpf('024.467.710-76'), 'Harry', $endereco));

var_dump($segundaConta);

echo Conta:: recuperaNumeroDeContas();
