<?php
$people = [
    [
        'first-name' => 'Taro',
        'age' => '25歳',
        'gender' => 'men'
    ],
    [
        'first-name' => 'Jiro',
        'age' => '20歳',
        'gender' => 'men'
    ],
    [
        'first-name' => 'hanako',
        'age' => '16歳',
        'gender' => 'women'
    ]
    ];

foreach($people as $person => $name){
    print $person. 'は'. $name. 'です'. '<br>';
}