<?php

namespace SegPartners;

class Calculo {

    private $valor;

    /**
     * Recebe uma string, a transforma em float
     * e popula o atributo $valor.
     * @valor string
     */
    public function __construct(string $valor)
    {
        # Limpa a string deixando apenas número e vírgula;
        $this->valor    = preg_replace('/[^0-9,]/', '', $valor);

        # Formata para float com a biblioteca nativa do php intl
        $valorFormatado = new \NumberFormatter("pt-PT", \NumberFormatter::DECIMAL);
        $this->valor    = $valorFormatado->parse($this->valor);
    }

    /**
     * Retorna o atributo $valor
     * @return float
     */
    public function valor()
    {
        return $this->valor;
    }

    /**
     * Incrementa o atributo $valor
     * @valor float
     */
    public function somar(float $valor)
    {
        $this->valor = round($this->valor + $valor, 2);
    }

    /**
     * Retorna o atributo $valor formatado
     * @return string
     */
    public function formatar()
    {
        return "R$ ".number_format($this->valor, 2, ",", ".");
    }

}