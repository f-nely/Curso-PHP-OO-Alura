<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('nelynely',
    new Cpf('123.456.789-10'), 1000);

$autenticador->tentaLogin($umDiretor, '525');