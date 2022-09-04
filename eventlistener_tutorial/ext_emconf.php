<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Campus Event Listener Example',
    'description' => 'This is a tutorial extension to illustrate PSR-14 events',
    'category' => 'plugin',
    'author' => 'Kevin Chileong Lee',
    'author_email' => 'youtube@slavlee.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
