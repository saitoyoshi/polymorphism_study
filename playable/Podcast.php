<?php

require_once __DIR__ . '/Playable.php';

class Podcast implements Playable {
    public function play():void {
        echo 'Playing a podcast.' . PHP_EOL;
    }
}
