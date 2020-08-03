<?php


namespace Alura\Banco\Modelo\Funcionario;


use Throwable;

class ValidaNomeException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $message = "Nome precisa ter pelo menos 5 caracteres: ";
        parent::__construct($message);
    }
}