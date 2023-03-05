<?php

namespace DemetriSam\FruitGarden;

class Harvester implements FruitStorage
{
    public $storage;
    public $fruits = [];

    public function __construct($storage)
    {
        $this->storage = $storage;
    }

    public function harvest($garden)
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
    public function sort()
    {
        $count = count($this->fruits);
        for ($i = 0; $i < $count; $i++) {
            $fruit = $this->pop();
            $containers = $this->storage->containers;
            foreach ($containers as $container) {
                if ($container->isFruitOk($fruit)) {
                    $container->push($fruit);
                    break;
                }
            }
        }

        return $containers;
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
