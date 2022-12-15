<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SegPartners\Model\Conta;

class ContaTest extends TestCase
{
    public function test_frete_gratis()
    {
        $saldo = 5000;

        $conta = new Conta();
        $this->assertEquals(5000, $conta->getSaldo());
    }

    public function test_sacar()
    {
        $conta = new Conta();

        $conta->sacar(1280.50);

        $this->assertEquals(3719.50, $conta->getSaldo());
    }

    public function test_sacar_limite()
    {
        $conta = new Conta();

        $this->assertFalse($conta->sacar(10000));
    }

    public function test_depositar()
    {
        $conta = new Conta();

        $conta->depositar(50);

        $this->assertEquals(5050, $conta->getSaldo());
    }
}