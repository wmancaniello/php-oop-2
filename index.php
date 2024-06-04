<?php

require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/item.php";
require_once __DIR__ . "/models/product.php";

// Categorie
$categoryDog = new Category("Cani", "fa-solid fa-dog");
$categoryCat = new Category("Gatti", "fa-solid fa-cat");

// Prodotti
$dogFood = new Product("Croccantini per cani", 9.99, "./img/img_croccantiniCane.png", $categoryDog, "Cibo");
$catFood = new Product("Croccantini per gatti", 9.99, "./img/img_croccantiniGatto.png", $categoryCat, "Cibo");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Animal</title>

    <!-- BOOTSTRAP -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta1/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
            <div class=" d-flex align-items-center justify-content-center gap-3">
                <h1 class="text-center"><?php echo $categoryDog->getName(); ?></h1>
                <i class="<?php echo $categoryDog->getIcon(); ?>"></i>
            </div>
            <div class="row">

                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card d-flex align-items-center justify-content-center">
                        <img src="<?php echo $dogFood->getImage(); ?>" class="card-img-top w-50" alt="Croccantini Cane">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dogFood->getTitle(); ?></h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card d-flex align-items-center justify-content-center">
                        <img src="<?php echo $dogFood->getImage(); ?>" class="card-img-top w-50" alt="Croccantini Cane">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dogFood->getTitle(); ?></h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card d-flex align-items-center justify-content-center">
                        <img src="<?php echo $dogFood->getImage(); ?>" class="card-img-top w-50" alt="Croccantini Cane">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $dogFood->getTitle(); ?></h5>
                            <p class="card-text">Descrizione</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">

                <div class=" d-flex align-items-center justify-content-center gap-3">
                    <h1 class="text-center"><?php echo $categoryCat->getName(); ?></h1>
                    <i class="<?php echo $categoryCat->getIcon(); ?>"></i>
                </div>

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