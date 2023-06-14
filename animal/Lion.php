<?php

require_once __DIR__ . '/Animal.php';

class Lion implements Animal {
    public function makeSound(): void
    {
        echo 'ライオンがなきました' . PHP_EOL;
    }
}
