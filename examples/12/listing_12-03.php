<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Snowboardschule',
    'description' => 'Site Package für die Snowboardschule Meyer, Müller & Schmidt',
    'category' => 'templates',
    'author' => '',
    'author_email' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'indexed_search' => '9.5.0-9.5.99',
            'news' => '7.0.0-7.0.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
