<?php


    require_once __DIR__ . "/Product.php";
    require_once __DIR__ . "/Category.php";

    $primoProdotto = new Product("Crocchette per Gatti", "Crocchette salutari per il tuo gattino", 39);
    $secondoProdotto = new Product("Topolino", "Topolino, con questo il tuo felino impazzira'", 11);
    $terzoProdotto = new Product("Cuccia per Cani", "Una splendida cuccia per il tuo amico a 4 zampe", 72);


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
             '</div>',
            '</div>';
        }
        ?>
</body>
</html>