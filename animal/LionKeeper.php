<?php

require_once __DIR__ . '/Zookeeper.php';

class LionKeeper implements Zookeeper {
    public function letAnimalMakeSound(Animal $animal): void
    {
        $animal->makeSound();
    }
    public function feedAnimal(Animal $animal, string $food): void
    {
        if ($animal instanceof Lion) {
            $animal->eatFood($food);
        } else {
            throw new Exception('ライオンしか世話できません');
        }
    }
}
