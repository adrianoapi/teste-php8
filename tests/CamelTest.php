<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use SegPartners\Model\MinhaClasseConcreta;



class CamelTest extends TestCase
{
    public function test_nome()
    {
        $this->assertEquals(
            "nomeCompleto",
            new MinhaClasseConcreta('nome_completo', false)
        );
    }

    public function test_nome_null()
    {
        $this->assertNull(new MinhaClasseConcreta('', true));
    }
}
//falha git
//falha