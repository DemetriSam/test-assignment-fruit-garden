<?php

namespace DemetriSam\FruitGarden;

class Reporter
{
    public function report($containers)
    {
        echo 'Собрано:';
        echo PHP_EOL;
        foreach ($containers as $container) {
            $desc = $container->description;
            $quantity = $container->getQuantity();
            $totalWeight = $container->getTotalWeight();

            echo "$desc: $quantity штук, общим весом $totalWeight";
            echo PHP_EOL;
        }
    }
}
