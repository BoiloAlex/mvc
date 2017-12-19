<?php



// этот код не сработает
error_reporting(E_ALL);
ini_set('display_errors', 1);

	$host = '127.0.0.1';
    $db   = 'wp-sanya';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

$email = "andrey@weeteam.net";
$stmt = $pdo->prepare('SELECT user_nicename FROM starski_users WHERE user_email = '.$email);
$row = $stmt->fetch();
var_dump($stmt);