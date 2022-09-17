<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Eventlistener Tutorial 2',
    'description' => 'A second extension to illustrate PSR-14 events.',
    'category' => 'plugin',
    'author' => 'Kevin Chileong Lee',
    'author_email' => 'youtube@slavlee.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'eventlistener_tutorial' => '1.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
