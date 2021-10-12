<?php
$dsn = 'mysql:host=localhost;dbname=shoppingSystem';
$username = 'heghine';
$password = 'Heghine111+';


try {
    $db = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
    $error = 'Database Error: ';
    $error .= $e->getMessage();
    include('views/error.php');
    exit();
}
