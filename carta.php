<?php

class Carta{
    public $numero;
	  public $cc_cvc;
    private int $expiryYear;
	  private int $expiryMonth;
    public $isExpired;

    public function __construct($numero, $cc_cvc, int $expiryYear, int $expiryMonth)
	{
		$this->numero = $numero;
    $this->cc_cvc = $cc_cvc;
    $this->expiryYear = $expiryYear;
		$this->expiryMonth = $expiryMonth;
    $this->isExpired();
	}

    public function isExpired(): bool {
      if ((int) date('y') < $this->expiryYear) {
        return false;
        throw new Exception('Errore!');
      } else if ((int) date('y') == $this->expiryYear && (int) date('n') < $this->expiryMonth) {
        return false;
        throw new Exception('Errore!');
      }
      return true;
    }
}