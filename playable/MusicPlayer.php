<?php

require_once __DIR__ . '/Playable.php';

class MusicPlayer {
    public function play(Playable $item) : void {
        $item->play();
    }
}
