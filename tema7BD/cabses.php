<?php

session_start();
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL ^ E_NOTICE);

try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "root");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

