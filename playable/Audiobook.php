<?php

require_once __DIR__ . '/Playable.php';

class Audiobook implements Playable {
    public function play(): void {
        echo 'Playing an audiobook.' . PHP_EOL;
    }
}
