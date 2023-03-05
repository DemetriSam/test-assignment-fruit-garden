<?php

namespace DemetriSam\FruitGarden\Garden;

class Garden
{
    public $trees;

    public function __construct($seeds)
    {
        foreach ($seeds as $seed) {
            $species = $seed['species'];
            $fruit = $seed['fruit'];
            $productivity = $seed['productivity'];
            $quantity = $seed['quantity'];

            for ($i = 0; $i < $quantity; $i++) {
                $this->trees[] = new Tree($species, $fruit, $productivity, $i + 1);
            }
        }
    }
}
