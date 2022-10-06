<?php


$foods = [
    'vegetables' => explode(', ','brinjal, broccoli, carrot, capsicum, potato'),
    'fruits' => explode(', ','Apple, Banana, Mango, Pineapple'),
    'drinks' => explode(', ','water, milk, juice')
];


$sample2 = [
        [1,2,3,4],
        [11,22,33,44],
        [111, 222, 333, 444],
        [111, 222, 3333, [4,5,6,7]]
    ];

echo $sample2[3][3][2];
