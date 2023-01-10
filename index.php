<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    require_once __DIR__ . "/Product.php";
    require_once __DIR__ . "/Category.php";

    $primoProdotto = new Product("Crocchette per Gatti", "Crocchette salutari per il tuo gattino", 39);


    $products = [$primoProdotto];
    var_dump($products);

    


    ?>
</body>
</html>