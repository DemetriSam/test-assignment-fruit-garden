<?php

namespace DemetriSam\FruitGarden;

use DemetriSam\FruitGarden\Garden\Fruit;
use DemetriSam\FruitGarden\Garden\Garden;
use DemetriSam\FruitGarden\Storage\Storage;

class Harvester implements FruitStorage
{
    public Storage $storage;
    public array $fruits = [];

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function harvest(Garden $garden): void
    {
        $trees = $garden->trees;

        foreach ($trees as $tree) {
            $count = count($tree->fruits);

            for ($i = 0; $i < $count; $i++) {
                $fruit = $tree->pop();
                $this->push($fruit);
            }
        }
    }
    public function sort(): array
    {
        $count = count($this->fruits);
        $containers = $this->storage->containers;
        for ($i = 0; $i < $count; $i++) {
            $fruit = $this->pop();
            foreach ($containers as $container) {
                if ($container->isFruitOk($fruit)) {
                    $container->push($fruit);
                    break;
                }
            }
        }

        return $containers;
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
