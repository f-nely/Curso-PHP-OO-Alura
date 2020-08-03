<?php

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsufucienteException, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);

try {
    $conta->saca(700);
} catch (SaldoInsufucienteException $exception) {
    echo "Você, não tem saldo para realizar este saque. " . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
}


echo $conta->recuperaSaldo();
