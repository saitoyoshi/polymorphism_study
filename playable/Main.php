<?php

require_once __DIR__ . '/Playable.php';
require_once __DIR__ . '/Song.php';
require_once __DIR__ . '/Audiobook.php';
require_once __DIR__ . '/Podcast.php';
require_once __DIR__ . '/MusicPlayer.php';

class Main {
    public function run(): void {
        $song = new Song();
        $audiobook = new Audiobook();
        $podcast = new Podcast();

        $musicPlayer = new MusicPlayer();

        // $musicPlayer->play($song);
        // $musicPlayer->play($audiobook);
        $musicPlayer->play($podcast);
    }
}
$main = new Main();
$main->run();
