<?php

namespace SegPartners\Model;

class Conta {

    private $nome;
    private $numero;
    private $saldo;

    public function __construct()
    {
        $this->saldo = 5000;
    }

    public function setNome(string $value)
    {
        $this->nome = $value;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function sacar(float $valor)
    {
        if($this->saldo >= $valor)
        {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
}