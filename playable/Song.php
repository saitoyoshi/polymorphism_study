<?php

require_once __DIR__ . '/Playable.php';

class Song implements Playable {
    public function play(): void {
        echo 'Playing a song.' . PHP_EOL;
    }
}
