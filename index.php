<!DOCTYPE html> 
<head>
    <title>Сервисный центр</title>
    <link rel="stylesheet", href="css3.css">
    <script src="js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body> 

    <?php require_once ("blocks/header.php"); ?>

    <div class="container">
    
        <div class="index__wrap">   
            <section class="index__main"></section>
                <div class="p-4 mb-3 bg-body-tertiary rounded" id="About">
                    <h4 class="fst-italic">О нас</h4>
                    <p class="mb-0">Мы - это команда профессионалов, специализирующихся на ремонте компьютерной техники. Наш сервисный центр был основан с целью предоставления качественных услуг по ремонту и обслуживанию компьютеров для всех жителей нашего города.</p>
                </div>    

                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                    <div class="col-lg-6 px-0">
                        <h1 class="display-4 fst-italic">Мы рады помочь Вам решить проблемы, возникшие при эксплуатации техники. Наши специалисты всегда готовы прийти к Вам на помощь.</h1>
                    </div>
                </div>
    <?php require_once ("blocks/footer.php"); ?>
</body>
</html>