<?php

require_once './db.php';

$editingRes = "";
if (isset($_GET["product-name"], $_GET["product-price"])) {
    $productToEdit = $_GET["product-name"];

    if ($productToEdit != "") {
        $editingRes = "Prodotto non trovato.";
        foreach ($products as $product) {
            if ($product->getName() == $productToEdit) {
                try {
                    $product->setPrice($_GET["product-price"]);
                    $editingRes = "Prodotto modificato correttamente.";
                } catch (Exception $e) {
                    $editingRes = $e->getMessage();
                }
            }
        }
    } else {
        $editingRes = "Nome prodotto non valido.";
    }
}

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
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                        <h3 class="card-title fs-4"><?= $product->getName() ?></h3>
                        <span>Prezzo: € <?= number_format($product->getPrice(), 2) ?></span>
                        <div class="product-category">
                            <span>Categoria: </span>
                            <i class="fa-solid <?= $product->getCategory()->getIcon() ?>"></i>
                        </div>
                        <div>Tipologia prodotto: <?= get_class($product)::getClassName() ?></div>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>

        <form action="index.php" method="get">
            <h2>Aggiungi prodotto</h2>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Nome Prodotto</label>
                <select name="product-name" class="form-select" id="inputGroupSelect01" required>
                    <option selected>Scegli...</option>
                    <?php
                    foreach ($products as $product) {
                    ?>
                        <option value="<?= $product->getName() ?>"><?= $product->getName() ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Nuovo prezzo prodotto</span>
                <input type="number" min=0 step="0.01" name="product-price" class="form-control" aria-describedby="basic-addon2" required>
            </div>

            <button type="submit" class="btn btn-primary">Cambia</button>
            <p><?= $editingRes ?></p>
        </form>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>