<?php


namespace Alura\Banco\Modelo\Conta;


class SaldoInsufucienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $messagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual em conta";
        parent::__construct($messagem);
    }

}