<?php

class Product{
    //Proprieta'
    public $title;
    public $description;
    public $price;

    public function __construct(string $title, string $description, $price)
    {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }
}

?>