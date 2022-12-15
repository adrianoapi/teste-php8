<?php

namespace SegPartners\Model;

class Compra{

    public function __construct()
    {
        //
    }

    /**
     * Checa se o valor é maior ou igual
     * ao limite mínimo para abolir o frete.
     * @valor Float
     * @return boolean
     */
    public function freteGratis($valor)
    {
        return $valor >= 120;
    }

    /**
     * Pega extrai os números de uma string
     * e formata-os como cpf.
     * @return String
     */
    public function formatarCpf(String $valor)
    {
        $_valor = preg_replace("/\D/", '', $valor);
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $_valor);
    }

}