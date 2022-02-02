<?php

//Multidimensional Array - An Array inside another array
//PHP Allows its multidimensional arrays to be either indexed or associative.
// Associative arrays are more interactive as compared to the indexed one.
$Students = [
    'Raman' => [
        'age'           =>  30,
        'qualification' => 'B.E',
        'marks'         =>  63.5,
        'location'      => [ //Associate Array
            'permanent' => 'Warangal',
            'communicate' => 'Bengalure'
        ],
        'technologies' => ['JS', 'VUEJS'] //Indexed Array

    ],
    'Sai' => [
        'age'           =>  29,
        'qualification' => 'B.E',
        'marks'         =>  63.6,
        'location'      => [ //Associate Array
            'permanent' => 'Warangal',
            'communicate' => 'Bengalure'
        ],
        'technologies' => ['PHP', 'NODEJS', 'key' => 1] //Indexed Array

    ]
];

//Accesing MultDimensional Array:
echo 'Age:' . $Students['Raman']['age']; //30
echo 'Location:' . $Students['Raman']['location']['permanent']; //Warangal
echo 'Backend:' . $Students['Raman']['technologies'][0]; //JS

echo '<pre>';
print_r($Students);
