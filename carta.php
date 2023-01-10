<?php

class Carta{
    public $numero;
	public $cc_cvc;
    public $cc_exp;
    public $validation;

    public function __construct($numero, $cc_cvc, $cc_exp)
	{
		$this->numero = $numero;
        $this->cc_cvc = $cc_cvc;
        $this->cc_exp = $cc_exp;
	}

    public function setValidation()
	{
      if ($this->cc_exp = 'test') {
        $this->validation = true;
      }
		return $this;
    }

    public function getValidation()
    {
      return $this->validation;
    }
}