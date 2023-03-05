<?php

namespace DemetriSam\FruitGarden;

interface FruitStorage
{
    public function push($fruit);
    public function pop();
}
