<?php

namespace DemetriSam\FruitGarden;

use DemetriSam\FruitGarden\Garden\Fruit;

interface FruitStorage
{
    public function push(Fruit $fruit): void;
    public function pop(): Fruit;
}
