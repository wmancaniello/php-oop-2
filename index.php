<?php

require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/item.php";
require_once __DIR__ . "/models/product.php";

// Categorie
$categoryDog = new Category("Cani", "ico_cane.png");
$categoryCat = new Category("Gatti", "ico_gatto.png");

// Prodotti
$product1 = new Product("Croccantini per cani", 9.99, "../img/img_croccantiniCane.png", $categoryDog, "Cibo");
$product2 = new Product("Croccantini per gatti", 9.99, "../img/img_croccantiniGatto.png", $categoryCat, "Cibo");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Animal</title>

    <!-- BOOTSTRAP -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>

    <body>

        <div class="container mt-5">

            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="immagine">
                        <div class="card-body">
                            <h5 class="card-title">Titolo</h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>

    </html>
</body>

</html>