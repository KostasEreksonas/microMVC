<?php

$dsn = 'mysql:host=db;dbname=product_db;charset=utf8;port=3306';

$pdo = new PDO($dsn, 'product_db_user', 'secret', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->query("SELECT * FROM product");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($products);