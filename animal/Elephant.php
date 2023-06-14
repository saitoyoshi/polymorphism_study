<?php

class Elephant implements Animal {
    public function makeSound(): void
    {
        echo 'ぞうがなきました' . PHP_EOL;
    }
    public function eatFood(string $food): void
    {
        if ($food === '草') {
            echo $food . 'を食べました' . PHP_EOL;
        } else {
            throw new Exception("{$food}を食べません");
        }
    }
}
