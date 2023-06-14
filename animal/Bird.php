<?php

class Bird implements Animal {
    public function makeSound(): void
    {
        echo '鳥がなきました' . PHP_EOL;
    }
    public function eatFood(string $food): void {
        if ($food === '豆') {
            echo $food . 'をたべました' . PHP_EOL;
        } else {
            throw new Exception("鳥は{$food}を食べません");
        }
    }
}
