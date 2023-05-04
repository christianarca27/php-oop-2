<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';

$categories = [
    "dogs" => new Category("Cani"),
    "cats" => new Category("Gatti")
];

$products = [
    new Food("https://arcaplanet.vtexassets.com/arquivos/ids/284156/pedigree-dentastix-medium-main.jpg?v=638174869086130000", "Dentastix", $categories["dogs"], 30.99, "lorem", "105 pcs", ["prodotti di origine vegetale", "carni varie"], "1pc al giorno"),
    new Toy("https://arcaplanet.vtexassets.com/arquivos/ids/272941/frisbee-rosso-15-cm.jpg?v=1769591173", "Frisbee", $categories["dogs"], 4.69, "lorem", "15 cm"),
    new Food("https://arcaplanet.vtexassets.com/arquivos/ids/207882/Multipack-Next-Natural-Gatto-Tonnetto-e-Salmone-in-gelatina-6x50g.jpg?v=1769602330", "Next Cat Natural Tonnetto Salmone", $categories["cats"], 6.99, "lorem", "6x50g", ["tonnetto", "salmone", "riso"], "fino a 2 lattine al giorno"),
    new Toy("https://arcaplanet.vtexassets.com/arquivos/ids/277674/ap20036.jpg?v=1768868507", "Tiragraffi", $categories["cats"], 54, "lorem", "61x45x105 cm")
];

var_dump($products);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>PHP OOP 2</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>