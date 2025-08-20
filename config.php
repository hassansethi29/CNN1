<?php
$host = "localhost";
$dbname = "dbehall9rkpqcw";
$username = "urhkut6kgwhxo";
$password = "uimciaxilw3e";
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
