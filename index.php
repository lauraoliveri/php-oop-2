<?php

require __DIR__.'\Products.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pet Shop</title>
</head>
<body>
    <div>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $Bacchetta->img ?>" class="card-img-top" alt="<?php echo $Bacchetta->name ?>">
            <div class="card-body">
                <h5>
                <?php echo $Bacchetta->name ?>
                </h5>
                <div class="d-flex justify-content-around">
                    <div>
                        <div class="fw-bolder">
                            Prezzo:
                        </div>
                        <span>
                            <?php echo $Bacchetta->price ?>
                        </span>
                    </div>
                    <div>
                        <div class="fw-bolder">
                            Categoria:
                        </div>
                        <span>
                            <?php echo $Bacchetta->category ?>
                        </span>
                    </div>
                    <div>
                        <div class="fw-bolder">
                           Brand:
                        </div>
                        <span>
                            <?php echo $Bacchetta->brand ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>