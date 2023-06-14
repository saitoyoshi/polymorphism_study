<?php

class Bird implements Animal {
    public function makeSound(): void
    {
        echo '鳥がなきました' . PHP_EOL;
    }
}
