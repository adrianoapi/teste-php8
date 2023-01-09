<?php

namespace SegPartners\Model;

use SegPartners\Model\MinhaClasseAbstrata;

class MinhaClasseConcreta extends MinhaClasseAbstrata
{
    private $resultado;
    public function __construct($string = null, $null = false) {
        if ($null === true && ($string === null || empty($string))) {
            $this->resultado = null;
        } elseif ($null === false && ($string === null || empty($string))) {
            //throw new Exception('O primeiro parâmetro não pode ser nulo.');
			die('O primeiro parâmetro não pode ser nulo.');
        } else {
            $this->resultado = 	lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $string))));
        }
    }
	
	public function __toString()
	{
		return $this->resultado;
	}
	
	
}