<?php

$server = 'localhost';
/* $server = 'localhost:3307'; */

$username = 'root';
$password = '';
$database = 'login_sabor_peruano';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
