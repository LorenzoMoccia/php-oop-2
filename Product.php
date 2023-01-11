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
    public $image;


    //Applica uno sconto al prezzo del Product
    public function setSconto($sconto){
        if(!is_int(($sconto))){
            throw new Exception("Lo sconto non è un numero intero");
        }else{
            $this->price = $this->price - $sconto;
            return $this->price;
        }
    }

}

?>