<?php

class products{
    public $name;
    public $category;
    public $price;
    public $animal_type;

    public function __construct($name, $category, $price, $animal_type)
	{
		$this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->animal_type = $animal_type;
		
	}
}