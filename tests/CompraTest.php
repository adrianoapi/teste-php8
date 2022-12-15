<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use SegPartners\Model\Compra;


class CompraTest extends TestCase
{
    public function test_frete_gratis()
    {
        $compra = new Compra();
        $this->assertTrue($compra->freteGratis(120));
    }

    public function test_formatar_cpf()
    {
        $compra = new Compra();
        $cpf    = "meu cpf é: 91291985000";

        $this->assertMatchesRegularExpression(
            "/\d{3}.\d{3}.\d{3}-\d{2}/",
            $compra->formatarCpf($cpf),
            "Resultado ". $compra->formatarCpf($cpf) ." não é compátivel com o padrão esperado!"
        );
    }
}