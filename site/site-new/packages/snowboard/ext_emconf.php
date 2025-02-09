<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Snowboardschule',
    'description' => 'Site Package für die Snowboardschule Meyer, Müller & Schmidt',
    'category' => 'templates',
    'author' => '',
    'author_email' => '',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'indexed_search' => '10.4.0-10.4.99',
            'news' => '12.2.0-12.2.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
