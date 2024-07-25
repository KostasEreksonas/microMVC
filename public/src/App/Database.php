<?php

namespace App;

use PDO;

class Database
{
    public function getConnection(): PDO
    {
        $dsn = 'mysql:host=db;dbname=product_db;charset=utf8mb4;port=3306';

        return new PDO($dsn, 'root', 'root', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}