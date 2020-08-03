<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo";
}


