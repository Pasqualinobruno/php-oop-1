<?php

include './db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <h1>I film di Fabio</h1>
        <div class="row">
            <div class="col-3">
                <div class="card mb-3">
                    <img src="<?php echo $avatar->coverImage; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $avatar->title; ?></h5>
                        <p class="card-text"><?php echo $avatar->getInfo(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card mb-3">
                    <img src="<?php echo $matrix->coverImage; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $matrix->title; ?></h5>
                        <p class="card-text"><?php echo $matrix->getInfo(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    img {
        width: 100%;
        height: 100%;
    }
</style>