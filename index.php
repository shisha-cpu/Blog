<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>

    </style>
</head>
<body>
<?php
    require('./blocks/header.php')
    ?>

    <div class="container">
        <h3>Наши статьи</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php for ($i = 0; $i < 5; $i++): ?>
            <div class="col">
                <div class="card h-100">
                    <img src="img/<?php echo($i + 1) ?>.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Название статьи</h5>
                        <p class="card-text">Краткое описание статьи.</p>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php
    require('./blocks/footer.php')
    ?>
</body>
</html>
