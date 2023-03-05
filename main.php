<?php

use DemetriSam\FruitGarden\Garden\Garden;
use DemetriSam\FruitGarden\Storage\Storage;
use DemetriSam\FruitGarden\Harvester;
use DemetriSam\FruitGarden\Reporter;

require __DIR__ . '/vendor/autoload.php';

$config = include 'config.php';

$garden = new Garden($config['seeds']);
$emptyContainers = new Storage($config['containers']);

$harvester = new Harvester($emptyContainers);
$harvester->harvest($garden);
$containers = $harvester->sort();

$reporter = new Reporter();
$reporter->report($containers);
