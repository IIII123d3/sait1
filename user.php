<!DOCTYPE html> 
<html>
<head>
    <title>Личный кабинет</title>
    <link rel="stylesheet", href="css3.css">
    <script src="js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="container">
        <h2>Личный кабинет</h2>
        <p> <b><?= $_COOKIE['login']?></b> </p>
    </div>

    <?php require_once  "blocks/footer.php"; ?>
</body>
</html>