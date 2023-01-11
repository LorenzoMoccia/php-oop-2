<?php
trait Sconto{
    public $percentualeSconto;
}

class Product{
    use Sconto;
    //Proprieta'
    public $title;
    public $description;
    public $price;
    public $type;

}

?>