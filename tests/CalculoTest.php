<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SegPartners\Calculo;

class CalculoTest extends TestCase
{

    public function test_converte_para_float()
    {

        $calculo = new Calculo('R$ 1.234,56');


        $this->assertIsFloat($calculo->valor());
        $this->assertEquals(1234.56, $calculo->valor());

    }

    public function test_soma_valor()
    {

        $calculo = new Calculo('R$ 1.234,56');

        $calculo->somar(1.07);

        $this->assertIsFloat($calculo->valor());
        $this->assertEquals(1235.63, $calculo->valor());
    }

    public function test_formata_valor()
    {
        $calculo = new Calculo('R$ 1.234,56');

        $calculo->somar(1.07);

        $this->assertEquals('R$ 1.235,63', $calculo->formatar());
    }
}