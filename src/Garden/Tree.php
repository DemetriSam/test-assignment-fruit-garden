<?php

namespace DemetriSam\FruitGarden\Garden;

class Tree
{
    public $id;
    public $species;
    public $fruits;

    public function __construct($species, $fruitConfig, $productivity, $id)
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
}
