<?php

namespace DemetriSam\FruitGarden\Garden;

class Fruit
{
    public $name;
    public $weight;

    public function __construct($config)
    {
        $this->name = $config['name'];
        $this->weight = rand($config['weight']['min'], $config['weight']['max']);
    }
}
