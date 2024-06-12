<!DOCTYPE html> 
<html>
<head>
    <title>Сервисный центр</title>
    <link rel="stylesheet", href="css3.css">
    <script src="js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">

<main class="form-signin w-50 m-auto">
  <form method="post" action="/lib/load.php">
    <h1 class="h3 mb-3 fw-normal">Пожалуйста, войдите в систему</h1>
    <div class="form-floating">
      <input type="text" name="login" class="form-control" id="floatingInput" placeholder="Логин" wfd-id="id2">
      <label for="floatingInput">Логин</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль" wfd-id="id1">
      <label for="floatingPassword">Пароль</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Вход</button>
  </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    

</body>