<?php
// Configurazione del database
$db_host = '34.68.250.47';
$db_name = 'image_catalog';
$db_user = 'appmod-phpapp-user';
$db_pass = 'Myeightnmae8';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>
