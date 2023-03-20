<?php

namespace DemetriSam\FruitGarden\Storage;

use Closure;
use DemetriSam\FruitGarden\FruitStorage;
use DemetriSam\FruitGarden\Garden\Fruit;

class Container implements FruitStorage
{
    public string $name;
    public string $description;
    public Closure $condition;
    public array $fruits = [];

    public function __construct(string $name, string $description, Closure $condition)
    {
        $this->name = $name;
        $this->description = $description;
        $this->condition = $condition;
    }

    public function isFruitOK(Fruit $fruit): bool
    {
        $condition = $this->condition;
        return $condition($fruit);
    }

    public function getQuantity(): int
    {
        return count($this->fruits);
    }

    public function getTotalWeight(): float
    {
        return array_reduce($this->fruits, fn ($sum, $fruit) => $sum + $fruit->weight, 0);
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
