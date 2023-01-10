<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Food extends Product{
    public $ingredients;
    public $quantity;
    public Category $type;

    public function __construct(string $ingredients, string $quantity)
    {
        $this->ingredients = $ingredients;
        $this->quantity = $quantity;
    }
}

?>