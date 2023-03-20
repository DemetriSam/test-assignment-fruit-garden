<?php

namespace DemetriSam\FruitGarden\Garden;

class Fruit
{
    public string $name;
    public int $weight;

    public function __construct(array $config)
    {
        $this->name = $config['name'];
        $this->weight = rand($config['weight']['min'], $config['weight']['max']);
    }
}
