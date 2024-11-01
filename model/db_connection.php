<?php

$host = 'localhost';
$db = 'portfolioapp';
$user = 'root';
$pass = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kon geen verbinding maken: " . $e->getMessage());
}

/*eerst had ik de verkeerde versie van MySQL. Deze verwijderd en opnieuw gedownload. */


