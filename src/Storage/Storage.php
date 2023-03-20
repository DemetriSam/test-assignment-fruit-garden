<?php

namespace DemetriSam\FruitGarden\Storage;

class Storage
{
    public array $containers;

    public function __construct(array $config)
    {
        $containers = [];

        foreach ($config as $container) {
            $containers[] = new Container($container['name'], $container['description'], $container['condition']);
        }

        $this->containers = $containers;
    }
}
