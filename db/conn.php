<?php
//heroko deployment database
 $host= "remotemysql.com";
 $db = "7kGUvIQNGb";
 $user = "7kGUvIQNGb";
 $pass = "0rbqF4lMIr";
 $charset = "utf8mb4";

//databace for localserver
$host = "localhost";
$db = "attandance_db";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
require_once 'crud.php';
$crud = new crud($pdo);
require_once 'users.php';
$users = new users($pdo);
$users->insertUser('admin@13', 'password');
