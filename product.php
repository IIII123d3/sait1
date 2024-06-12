<!DOCTYPE html> 
<html>
<head>
    <title>Сервисный центр</title>
    <link rel="stylesheet", href="css3.css">
    <script src="js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body> 
<?php require_once "blocks/header.php"; ?>
  
  <main class="form-signin w-50 m-auto">
    <form method="post" action="/lib/product.php">
      <h1 class="h3 mb-3 fw-normal">Запись на консультацию</h1>
      <div class="form-floating">
        <input type="time" name="time" class="form-control" id="floatingInput" placeholder="Время" wfd-id="id">
        <label for="floatingInput">Вбрать время</label>
      </div>
      <div class="form-floating">
        <input type="date" name="date" class="form-control" id="floatingInput" placeholder="Дата" wfd-id="id">
        <label for="floatingInput">Выбрать дату</label>
      </div>
      <div class="form-floating">
        <input type="text" name="error" class="form-control" id="floatingInput" placeholder="Ошибка" wfd-id="id0">
        <label for="floatingInput">Опишите свою проблему</label>
      </div>
      <button class="btn btn-primary w-50 py-2" type="submit">Записаться</button>
    </form>
  </main>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php require_once  "blocks/footer.php"; ?>
  </body>
  </html>