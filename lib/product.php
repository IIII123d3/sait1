<?php
    $time = trim(filter_var($_POST['time'], FILTER_SANITIZE_SPECIAL_CHARS));
    $date = trim(filter_var($_POST['date'], FILTER_SANITIZE_SPECIAL_CHARS));
    $question = trim(filter_var($_POST['question'], FILTER_SANITIZE_SPECIAL_CHARS));

    require "db.php";
    $sql = 'INSERT INTO kons(time, date, question) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$time, $date, $question]);

    header('location /user.php');


