<?php 

$dsn = 'mysql:dbname=sait1;host=127.0.0.1';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

// $table = 'users';
// $query = "SELECT * FROM $table WHERE 1";

// $res = $db->query($query, PDO::FETCH_ASSOC);

// while ($row = $res->fetch()) {
//     $array[] = [
//         "id"=> $row["id"],
//         "login"=> $row["login"],
//         "mail"=> $row["mail"],
//     ]
// }
var_dump($row);
