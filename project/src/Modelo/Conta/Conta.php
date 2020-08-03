<?php

namespace Alura\Banco\Modelo\Conta;
use http\Exception\InvalidArgumentException;

abstract class Conta
{
    private $titular;
    protected float $saldo;
    private static $numeroDeContas = 0; // Atributo da classe


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            throw new SaldoInsufucienteException($valorSaque, $this->saldo);
        }

        $this->saldo -= $valorSaque; // Early Return
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            throw new \InvalidArgumentException();
        }

        $this->saldo += $valorADepositar;
    }



    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();

    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();

    }

    public static function recuperaNumeroDeContas(): int
    {
        //return Conta::$numeroDeContas;
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;

}