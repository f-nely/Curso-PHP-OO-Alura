<?php

use Alura\Banco\Modelo\Cpf;

require_once 'autoload.php';

try {
    $cpf = new Cpf('12345678910');
} catch (InvalidArgumentException $exception) {
    echo "Cpf precisa está em um formato válido";
}

