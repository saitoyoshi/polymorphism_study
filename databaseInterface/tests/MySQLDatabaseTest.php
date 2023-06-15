<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../MySQLDatabase.php';

class MySQLDatabaseTest extends TestCase {
    public function testConnect() {
        $this->expectOutputString('MySQL serverにプログラムから接続しました' . PHP_EOL);
        $postgre = new MySQLDatabase();
        $postgre->connect();
    }
    public function testClose() {
        $this->expectOutputString('MySQL serverと切断しました' . PHP_EOL);
        $postgre = new MySQLDatabase();
        $postgre->close();
    }
    public function testQuery() {
        $postgre = new MySQLDatabase();
        $result = $postgre->query('select id,name,email from users limit 1');
        $this->assertSame(['id' => 1, 'name' => 'yamada', 'email' => 'example@mail.com'], $result);
    }
}
