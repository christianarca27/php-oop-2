<?php

require_once './db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>PHP OOP 2</h1>

        <ul id="product-list" class="card-group">
            <?php
            foreach ($products as $product) {
            ?>
                <li class="card product">
                    <img class="card-img-top product-image" src="<?= $product->getImageUrl() ?>" alt="">
                    <div class="card-body">
                        <h2 class="card-title fs-4"><?= $product->getName() ?></h2>
                        <span>Prezzo: € <?= $product->getPrice() ?></span>
                        <div class="product-category">
                            <span>Categoria: </span>
                            <img class="product-category-icon" src="<?= $product->getCategory()->getIcon() ?>" alt="">
                        </div>
                        <div>Tipologia prodotto: <?= get_class($product)::getClassName() ?></div>
                        <div class="card-text">Descrizione: <?= $product->getDescription() ?></div>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>