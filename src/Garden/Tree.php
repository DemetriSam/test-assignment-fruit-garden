<?php

namespace DemetriSam\FruitGarden\Garden;

use DemetriSam\FruitGarden\FruitStorage;

class Tree implements FruitStorage
{
    public int $id;
    public string $species;
    public array $fruits = [];

    public function __construct(string $species, array $fruitConfig, array $productivity, int $id)
    {
        $this->id = $id;
        $this->species = $species;
        $fruitsQ = rand($productivity['min'], $productivity['max']);
        $fruits = [];

        for ($i = 0; $i < $fruitsQ; $i++) {
            $fruits[] = new Fruit($fruitConfig);
        }

        $this->fruits = $fruits;
    }

    public function push(Fruit $fruit): void
    {
        array_push($this->fruits, $fruit);
    }

    public function pop(): Fruit
    {
        return array_pop($this->fruits);
    }
}
