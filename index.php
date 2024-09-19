<?php

use App\Connection\MysqlConnection;
use App\MyClass;


require __DIR__ . '/vendor/autoload.php';

$pdo = MysqlConnection::getInstance();
var_dump($pdo); 