<?php

interface DatabaseInterface {
    public function connect():void;
    public function query(string $sql): array;
    public function close(): void;
}
