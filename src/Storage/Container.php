<?php

namespace DemetriSam\FruitGarden\Storage;

class Container
{
    public $name;
    public $condition;
    public $fruits;

    public function __construct($name, $condition)
    {
        $this->name = $name;
        $this->condition = $condition;
    }
}
