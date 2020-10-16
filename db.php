<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sigte';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  echo 'conectado';
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}