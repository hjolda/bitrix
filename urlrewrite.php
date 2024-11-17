<?php

$arUrlRewrite = [
    0 => [
        'CONDITION' => '#^/services/#',
        'RULE' => '',
        'ID' => 'bitrix:catalog',
        'PATH' => '/services/index.php',
        'SORT' => 100,
    ],
    1 => [
        'CONDITION' => '#^/products/#',
        'RULE' => '',
        'ID' => 'bitrix:catalog',
        'PATH' => '/products/index.php',
        'SORT' => 100,
    ],
    2 => [
        'CONDITION' => '#^/news/#',
        'RULE' => '',
        'ID' => 'bitrix:news',
        'PATH' => '/news/index.php',
        'SORT' => 100,
    ],
];
