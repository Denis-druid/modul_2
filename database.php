<?php

include_once 'settings.php';

try {
    $pdo = new PDO("mysql:host={$hostname};dbname={$database}", $username, $password);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}
