<?php

require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Lion.php';
require_once __DIR__ . '/Elephant.php';
require_once __DIR__ . '/Bird.php';
require_once __DIR__ . '/Zookeeper.php';

class Main {
    public function run(): void {
        $lion = new Lion();
        $elephant = new Elephant();
        $bird = new Bird();

        $zooKeeper = new Zookeeper();

        // $zooKeeper->letAnimalMakeSound($lion);
        // $zooKeeper->letAnimalMakeSound($elephant);
        $zooKeeper->letAnimalMakeSound($bird);
    }
}

$main = (new Main())->run();
