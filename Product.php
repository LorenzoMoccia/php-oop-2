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

    public function setSconto($percentualeSconto){
        if(!is_int(($percentualeSconto))){
            throw new Exception("Lo sconto non è un numero intero");
        }
    }

}

?>