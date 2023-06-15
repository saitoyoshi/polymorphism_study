<?php

require_once __DIR__ . '/MySQLDatabase.php';
require_once __DIR__ . '/PostgreSQLDatabase.php';

class Main {
    private DatabaseInterface $db;
    public function __construct(DatabaseInterface $db) {
        $this->db = $db;
    }
    public function connect() {
        $this->db->connect();
    }
    public function query(string $sql) {
        $this->db->query($sql);
    }
    public function close() {
        $this->db->close();
    }
}

// $db = new MySQLDatabase();
$db = new PostgreSQLDatabase();
$main = new Main($db);
$main->connect();
$main->query('select name form users limit 3');
$main->close();
