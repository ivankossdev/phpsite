<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP web site</title>
</head>
<body>
<?php require "blocks/header.php" ?>

  <div class="container mt-5"> 
    <h3 class="mb-5"> Наши статьи </h3>
    <div class="col">
        <div class="d-flex flex-wrap">
            <?php for($i = 0; $i < 6; $i++): ?>  
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Фотография</h4>
                    </div>
                    <div class="card-body">
                    <h1 class="card-title pricing-card-title">Фото <small class="text-muted fw-light"><?php echo $i + 1; ?></small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <img class="img-thumbnail" src="img/<?php echo ($i + 1); ?>.jpg" alt="photo">
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
  </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>