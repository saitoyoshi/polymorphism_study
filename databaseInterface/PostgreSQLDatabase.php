<?php

require_once __DIR__ . '/DatabaseInterface.php';

class PostgreSQLDatabase implements DatabaseInterface {
    public function connect(): void
    {
        echo 'PostgreSQL serverにプログラムから接続しました' . PHP_EOL;
    }
    public function query(string $sql): array
    {
        echo $sql . 'をDBに対して実行しました' . PHP_EOL;
        return ['id' => 1, 'name' => 'yamada', 'email' => 'example@mail.com'];
    }
    public function close(): void
    {
        echo 'PostgreSQL serverと切断しました' . PHP_EOL;
    }
}
