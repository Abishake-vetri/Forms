<?php
   $host= "localhost";
   $db = "attandance_db";
   $user = "root";
   $pass = "";
   $charset = "utf8mb4";
  
   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
   try {
       $pdo = new PDO($dsn, $user, $pass);
       $pdo->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
       
   } catch (PDOException $e) {
       echo $e->getMessage();
   }
    require_once 'crud.php';
   $crud = new crud($pdo);
?>