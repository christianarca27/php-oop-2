<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';

$categories = [
    "dogs" => new Category("Cani", "https://icon-library.com/images/dog-png-icon/dog-png-icon-6.jpg"),
    "cats" => new Category("Gatti", "https://cdn.icon-icons.com/icons2/2248/PNG/512/cat_icon_138789.png")
];

$products = [
    new Product("https://arcaplanet.vtexassets.com/arquivos/ids/254499-300-300/litterlocker-refills-sacchetti-ricambio.jpg?v=1769606995&quality=1&width=300&height=300", "Sacchetti Ricambio", $categories["cats"], 18.69, "lorem"),
    new Food("https://arcaplanet.vtexassets.com/arquivos/ids/284156/pedigree-dentastix-medium-main.jpg?v=638174869086130000", "Dentastix", $categories["dogs"], 30.99, "lorem", "105 pcs", ["prodotti di origine vegetale", "carni varie"], "1pc al giorno"),
    new Toy("https://arcaplanet.vtexassets.com/arquivos/ids/272941/frisbee-rosso-15-cm.jpg?v=1769591173", "Frisbee", $categories["dogs"], 4.69, "lorem", "15 cm"),
    new Food("https://arcaplanet.vtexassets.com/arquivos/ids/207882/Multipack-Next-Natural-Gatto-Tonnetto-e-Salmone-in-gelatina-6x50g.jpg?v=1769602330", "Next Cat Natural Tonnetto Salmone", $categories["cats"], 6.99, "lorem", "6x50g", ["tonnetto", "salmone", "riso"], "fino a 2 lattine al giorno"),
    new Toy("https://arcaplanet.vtexassets.com/arquivos/ids/277674/ap20036.jpg?v=1768868507", "Tiragraffi", $categories["cats"], 54, "lorem", "61x45x105 cm")
];
