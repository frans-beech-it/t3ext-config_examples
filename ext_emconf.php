<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Config examples',
    'description' => 'Some CKEditor and cropVariant example configuration',
    'category' => 'misc',
    'state' => 'experimental',
    'clearCacheOnLoad' => 1,
    'author' => 'Frans Saris [Beech.it]',
    'author_email' => 'franssaris@gmail.com',
    'author_company' => 'Beech.it',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'bootstrap_package' => '8.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
