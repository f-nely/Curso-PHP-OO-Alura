<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\ValidaNomeException;

require_once   'autoload.php';

try {
    $pessoa = new Titular(
        new Cpf('123.456.789-10'),
        'ana',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    );
} catch (ValidaNomeException $exception) {
    echo $exception->getMessage();
}

