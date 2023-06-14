<?php

require_once __DIR__ . '/Zookeeper.php';

class BirdKeeper implements Zookeeper {
    public function letAnimalMakeSound(Animal $animal): void
    {
        $animal->makeSound();
    }
    public function feedAnimal(Animal $animal, string $food): void
    {
        if ($animal instanceof Bird) {
            $animal->eatFood($food);
        } else {
            throw new Exception('鳥しか世話できません');
        }
    }
}
