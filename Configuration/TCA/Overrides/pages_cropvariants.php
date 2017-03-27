<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['pages']['columns']['media']['config']['overrideChildTca']['columns'] = [
    'crop' => [
        'config' => [
            'cropVariants' => [
                'default' => [
                    'title' => 'LLL:EXT:config_examples/Resources/Private/Language/locallang.xlf:imageManipulation.page.full-page',
                    'cropArea' => [
                        'x' => 0.0,
                        'y' => 0.0,
                        'width' => 1,
                        'height' => 1,
                    ],
                    'selectedRatio' => '16:4',
                    'allowedAspectRatios' => [
                        '16:4' => [
                            'title' => 'LLL:EXT:config_examples/Resources/Private/Language/locallang.xlf:imageManipulation.page.full-page',
                            'value' => 16 / 4
                        ],
                        '16:5' => [
                            'title' => 'Venlo test',
                            'value' => 16 / 5
                        ]
                    ]
                ],
                'mobile-landscape' => [
                    'disabled' => true,
                ],
                'mobile-portrait' => [
                    'disabled' => true,
                ]
            ]
        ]
    ]
];