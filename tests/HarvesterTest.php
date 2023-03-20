<?php

namespace DemetriSam\FruitGarden\Tests;

use DemetriSam\FruitGarden\Garden\Garden;
use DemetriSam\FruitGarden\Storage\Storage;
use DemetriSam\FruitGarden\Harvester;
use PHPUnit\Framework\TestCase;

class HarvesterTest extends TestCase
{
    public function testHarvester(): void
    {
        $config = include 'config.php';

        $garden = new Garden($config['seeds']);
        $emptyContainers = new Storage($config['containers']);

        [$quantity, $totalWeight] = array_reduce($garden->trees, function ($carry, $tree) {
            return array_reduce(
                $tree->fruits,
                fn ($carry, $fruit) => [$carry[0] + 1, $carry[1] + $fruit->weight],
                $carry
            );
        }, [0, 0]);

        $harvester = new Harvester($emptyContainers);
        $harvester->harvest($garden);
        $containers = $harvester->sort();

        $this->assertEquals(
            $quantity,
            array_reduce($containers, fn ($sum, $container) => $sum + count($container->fruits), 0)
        );

        $this->assertEquals(
            $totalWeight,
            array_reduce($containers, fn ($sum, $container) => $sum + $container->getTotalWeight(), 0)
        );
    }
}
