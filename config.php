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
        ],
        [
            'species' => 'Груша',
            'fruit' => [
                'name' => 'Груша',
                'weight' => ['min' => '130', 'max' => '170'],
            ],
            'productivity' => ['min' => 0, 'max' => 20],
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
            'condition' => fn ($fruit) => $fruit->name === 'Яблоко',
        ],
        [
            'name' => 'Контейнер для груш',
            'condition' => fn ($fruit) => $fruit->name === 'Груша',
        ],
        // [
        //     'name' => 'Контейнер для фруктов нарушающих законы физики',
        //     'condition' => fn($fruit) => $fruit->weight < 0,
        // ], 
    ]
];