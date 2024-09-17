<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'besjan@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Boeuf bourguignon',
        'recipe' => 'Etape 1 : mariner la viande dans le vin rouge...',
        'author' => 'ethane@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'besjan@exemple.com',
        'is_enabled' => false,
    ]
];

$users = [
    [
        'email' => 'besjan@exemple.com',
        'full_name' => 'Besjan KORAQI',
        'age' => 30,
    ],
    [
        'email' => 'ethane@exemple.com',
        'full_name' => 'ethane mama',
        'age' => 85,
    ],
];

foreach ($users as &$user) {
    $user['password'] = '0000';
}
?>
