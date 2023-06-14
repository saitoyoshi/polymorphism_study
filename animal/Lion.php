<?php

require_once __DIR__ . '/Animal.php';

class Lion implements Animal {
    public function makeSound(): void
    {
        echo 'ライオンがなきました' . PHP_EOL;
    }
    public function eatFood(string $food): void
    {
        if ($food === '肉') {
            echo '肉を食べました' . PHP_EOL;
        } else {
            throw new Exception("ライオンは{$food}を食べません");
        }
    }
}
