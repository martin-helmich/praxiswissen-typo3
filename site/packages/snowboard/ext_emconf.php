<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Snowboard',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
            'indexed_search' => '13.4.0-13.4.99',
            'news' => '12.2.0-12.2.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PraxiswissenTypo3\\Snowboard\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Martin Helmich',
    'author_email' => 'typo3@martin-helmich.de',
    'author_company' => 'Praxiswissen TYPO3',
    'version' => '1.0.0',
];
