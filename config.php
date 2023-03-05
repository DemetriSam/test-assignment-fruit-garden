<?php

return [
    'seeds' => [
        [
            'species' => 'Яблоня',
            'fruit' => [
                'name' => 'Яблоко',
                'weight' => ['min' => '150', 'max' => '180'],
            ],
            'productivity' => ['min' => 40, 'max' => 50],
            'quantity' => 10,
        ],
        [
            'species' => 'Груша',
            'fruit' => [
                'name' => 'Груша',
                'weight' => ['min' => '130', 'max' => '170'],
            ],
            'productivity' => ['min' => 0, 'max' => 20],
            'quantity' => 15,
        ],
        // [
        //     'species' => 'Хлямзевое дерево',
        //     'fruit' => [
        //         'name' => 'Хлямзек',
        //         'weight' => ['min' => '130', 'max' => '170'],
        //     ],
        //     'productivity' => ['min' => 0, 'max' => 20],
        // ],
    ],
    'containers' => [
        [
            'name' => 'Контейнер для яблок',
            'description' => 'яблоки',
            'condition' => fn ($fruit) => $fruit->name === 'Яблоко',
        ],
        [
            'name' => 'Контейнер для груш',
            'description' => 'груши',
            'condition' => fn ($fruit) => $fruit->name === 'Груша',
        ],
        // [
        //     'name' => 'Контейнер для летающих фруктов',
        //     'condition' => fn($fruit) => $fruit->weight < 0,
        // ], 
    ]
];
