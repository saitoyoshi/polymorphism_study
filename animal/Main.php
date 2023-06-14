<?php

require_once __DIR__ . '/Animal.php';
require_once __DIR__ . '/Lion.php';
require_once __DIR__ . '/Elephant.php';
require_once __DIR__ . '/Bird.php';
require_once __DIR__ . '/Zookeeper.php';
require_once __DIR__ . '/Lionkeeper.php';
require_once __DIR__ . '/ElephantKeeper.php';
require_once __DIR__ . '/Birdkeeper.php';

class Main {
    public function run(): void {
        $lion = new Lion();
        $elephant = new Elephant();
        $bird = new Bird();

        try {
            $lionKeeper = new LionKeeper();
            $lionKeeper->feedAnimal($lion, '肉');

            $elephantKeeper = new ElephantKeeper();
            $elephantKeeper->feedAnimal($elephant, '草');

            $birdKeeper = new BirdKeeper();
            $birdKeeper->feedAnimal($bird, '豆');
        } catch (\Exception $e) {
            echo $e->getMessage() . PHP_EOL;
        }
        // $zooKeeper->letAnimalMakeSound($lion);
        // $zooKeeper->letAnimalMakeSound($elephant);
        // $zooKeeper->letAnimalMakeSound($bird);
    }
}

$main = (new Main())->run();
