<?php

class User{
    public $nome;
	public $cognome;
    public $email;
    public $registered;
    public $sconto;
    public $carta;

    public function __construct($nome, $cognome, $email, $registered, $carta)
	{
		$this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->registered = $registered;
        $this->carta = $carta;
	}

    public function setSconto()
	{
      if ($this->registered) {
         $this->sconto = 20;
      }
		return $this;
    }

   public function getSconto()
    {
      return $this->sconto;
    }
}