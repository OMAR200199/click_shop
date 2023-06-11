<?php
$user = "root";
$pass = "omar";
$host = "localhost";
$port = "3306";
$dbname = "click_shop";
$dsn = "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname;
try {
   $db = new PDO($dsn, $user, $pass);
} catch (Exception $e){
    echo "Erreur " . $e->getMessage();
    die();
}
