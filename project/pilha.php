<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (Throwable $e) {
        echo $e->getMessage() . PHP_EOL; // O tipo de exceção
        echo $e->getLine() . PHP_EOL; // A linha onde ocorreu a exceção
        echo $e->getTraceAsString() . PHP_EOL; // Pinha de execução - call stack
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    intdiv(1, 0);
    throw new BadFunctionCallException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
