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

    <form action="check.php" method='post'>
      
        <div class="container">
        <h1 class='text-center'>Контактная форма </h1>
              <input type="email" name='email' placeholder="Введите email" class="form-control"><br>
              <textarea name="message" class="form-control" cols="30" rows="10" placeholder='Введите сообщение '></textarea><br>
              <button type='submit' name='send' class='btn btn-outline-primary'>Отправить</button>
        </div>
      
    </form>

<?php
    require('./blocks/footer.php')
    ?>
  
</body>
</html>
