<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorBonificacao;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{EditorVideo, Funcionario, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor('Vinicius Dias',
    new Cpf('123.456.789-10'), 2000
);

$umFuncionario->sobeDeNivel();

$umaFuncionario = new Gerente('Patricia Dias',
    new Cpf('987.654.321-10'), 3000
);

$umaDev = new Desenvolvedor('Mary B',
    new Cpf('987.654.321-10'), 2000
);

$umEditor = new EditorVideo('Paulo',
    new Cpf('456.987.231-10'), 1500);

$controlador = new ControladorBonificacao();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionario);
$controlador->adicionaBonificacaoDe($umaDev);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
