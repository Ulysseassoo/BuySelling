<?php

try {
    $database = new PDO('mysql:host=127.0.0.1;dbname=mydb;charset=utf8', 'root', '');
} catch (Exception $e) {
    var_dump('Erreur : '.$e->getMessage());die;
}