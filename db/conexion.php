<?php


$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $conexion = new PDO('mysql:host=localhost;dbname=bd_tienda', 'root', 'man777', $options);


    echo 'existossa';
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
