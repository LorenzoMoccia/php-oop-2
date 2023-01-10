<?php
require_once __DIR__ . "Product.php";

class Toy extends Product{
    public $dimension;
    public $color;
    
    function __construct(string $dimension, string $color)
    {
        $this->dimension = $dimension;
        $this->color = $color;
    }
}

?>