<?php


    require_once __DIR__ . "/Food.php";
    require_once __DIR__ . "/Toy.php";

    $categoryGatto = new Category("Gatto");
    $categoryCane = new Category("Cane");

    $primoProdotto = new Food("Crocchette per Gatti", "Crocchette salutari per il tuo gattino", 39, $categoryGatto);
    $secondoProdotto = new Toy("Topolino", "Topolino, con questo il tuo felino impazzira'", 11, $categoryGatto);
    $terzoProdotto = new Toy("Cuccia per Cani", "Una splendida cuccia per il tuo amico a 4 zampe", 72, $categoryCane);

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
             '<div class="product-title">',
                $product->title,
             '</div>',

             '<div class="product-description">',
                $product->description,
             '</div>',

             '<div class="product-price">',
                $product->price,
             '</div>';

             if($categoryCane == "Cane"){
                echo '<div class="product-category">Categoria: Cane</div></div>';
             }else{
                echo '<div class="product-category">Categoria: Gatto</div></div>';
             }
        }
        ?>
</body>
</html>