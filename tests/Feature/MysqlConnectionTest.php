<?php

namespace Test\Feature;

use App\Connection\MysqlConnection;
use PDO;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class MysqlConnectionTest extends TestCase
{
    public function testConnectionDb(): void
    {
        $pdo = MysqlConnection::getInstance();
        Assert::assertInstanceOf(PDO::class, $pdo);

    }
}