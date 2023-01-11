<?php


    require_once __DIR__ . "/Food.php";
    require_once __DIR__ . "/Toy.php";

    $categoryGatto = new Category("Gatto");
    $categoryCane = new Category("Cane");

    $primoProdotto = new Food("Crocchette per Gatti", "Crocchette salutari per il tuo gattino", 39, "https://www.fitoshop.it/media/catalog/product/cache/8df969e0e4e896ec378803f2dc5b2cbc/0/3/03033710208517.png", $categoryGatto);
    $secondoProdotto = new Toy("Topolino", "Topolino, con questo il tuo felino impazzira'", 11, "https://shop-cdn-m.mediazs.com/bilder/topino/sonoro/con/catnip/5/400/55405_PLA_Katzenspielzeug_Maus_mit_Katzenminze_und_Stimme_FG_DSC0500_5.jpg", $categoryGatto);
    $terzoProdotto = new Toy("Cuccia per Cani", "Una splendida cuccia per il tuo amico a 4 zampe", 72, "https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/0/400/icon_topseller_1_85__0.jpg", $categoryCane);

    $products = [$primoProdotto, $secondoProdotto, $terzoProdotto];
    
    /*
    echo '<pre>';
    var_dump($products);
    echo '</pre>';
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------------------LINK CSS ------------------------->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
        <?php foreach ($products as $product){
            echo '
            <div class="product-container">',
            '<div class="product-image-container">',
                '<img src=\''.$product->image.'\' class="product-image">',
             '</div>',

             '<div class="product-title">',
                $product->title,
             '</div>',

             '<div class="product-description">',
                $product->description,
             '</div>',

             '<div class="product-price">',
                $product->price, "€",
             '</div>',

             '<div class="product-category">',
                $product->type->type,
             '</div>';


             //Provo a impostare uno sconto, se il paramentro di setSconto non e' un numero intero genera l'Exception
             try{
                echo $product->setSconto(2);
             }catch(Exception $e){
                echo "Non è un numero intero";
             }

             echo '</div>';

            }

            

        
        ?>
</body>
</html>