<?php

require_once __DIR__ . '/Zookeeper.php';

class ElephantKeeper implements Zookeeper {
    public function letAnimalMakeSound(Animal $animal): void
    {
        $animal->makeSound();
    }
    public function feedAnimal(Animal $animal, string $food): void
    {
        $animalClass = get_class($animal);
        if ($animal instanceof Elephant) {
            $animal->eatFood($food);
        } else {
            throw new Exception("{$animalClass}を世話できません");
        }
    }
}
