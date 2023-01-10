<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

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