<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));
    
    if(strlen($login) < 2) {
        echo 'login error';
        exit;
    }
    if(strlen($email) < 2 && str_contains($email,'@')) {
        echo 'login error';
        exit;
    }
    if(strlen($password) < 2) {
        echo 'parol error';
        exit;
    }
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $password_verify = password_verify($password, $login);

    require "db.php";

    $sql = 'INSERT INTO users(login, email, password) VALUES(?, ?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $email, $password_hash]);

    header('location: /321.php');
    
    
    