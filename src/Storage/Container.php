<?php

namespace DemetriSam\FruitGarden\Storage;

use DemetriSam\FruitGarden\FruitStorage;

class Container implements FruitStorage
{
    public $name;
    public $description;
    public $condition;
    public $fruits = [];

    public function __construct($name, $description, $condition)
    {
        $this->name = $name;
        $this->description = $description;
        $this->condition = $condition;
    }

    public function isFruitOK($fruit)
    {
        $condition = $this->condition;
        return $condition($fruit);
    }

    public function getQuantity()
    {
        return count($this->fruits);
    }

    public function getTotalWeight()
    {
        return array_reduce($this->fruits, fn ($sum, $fruit) => $sum + $fruit->weight, 0);
    }

    public function push($fruit)
    {
        array_push($this->fruits, $fruit);
    }

    public function pop()
    {
        return array_pop($this->fruits);
    }
}
