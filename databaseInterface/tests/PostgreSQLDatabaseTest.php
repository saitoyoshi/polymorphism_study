<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../PostgreSQLDatabase.php';

class PostgreSQLDatabaseTest extends TestCase {
    public function testConnect() {
        $this->expectOutputString('PostgreSQL serverにプログラムから接続しました'. PHP_EOL);
        $mysql = new PostgreSQLDatabase();
        $mysql->connect();
    }
    public function testClose() {
        $this->expectOutputString('PostgreSQL serverと切断しました'. PHP_EOL);
        $mysql = new PostgreSQLDatabase();
        $mysql->close();
    }
    public function testQuery() {
        $mysql = new PostgreSQLDatabase();
        $result = $mysql->query('select id,name,email from users limit 1');
        $this->assertSame(['id' => 1, 'name' => 'yamada', 'email' => 'example@mail.com'], $result);
    }
}
