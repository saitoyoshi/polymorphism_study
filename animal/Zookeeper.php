<?php

interface Zookeeper {
    public function letAnimalMakeSound(Animal $animal): void;
    public function feedAnimal(Animal $animal, string $food): void;
}
