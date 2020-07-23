<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};


require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis',
            'bairro teste', 'Rua lá', '74')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();