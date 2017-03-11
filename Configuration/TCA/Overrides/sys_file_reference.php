<?php
defined('TYPO3_MODE') or die(';-)');

$additionalCropVariants = [
    'default' => [
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.default',
        'allowedAspectRatios' => [
            'NaN' => [
                'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                'value' => 0.0
            ],
        ],
    ],
    'mobile-landscape' => [
        'title' => 'Mobile landscape',
        'allowedAspectRatios' => [
            '16:9' => [
                'title' => '16:9',
                'value' => 16 / 9
            ],
        ],
        'selectedRatio' => '16:9',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
            'x' => 1 / 3,
            'y' => 1 / 3,
            'width' => 1 / 3,
            'height' => 1 / 3,
        ],
        'coverAreas' => [
            [
                'x' => 0.05,
                'y' => 0.85,
                'width' => 0.9,
                'height' => 0.1,
            ]
        ],
    ],
    'mobile-portrait' => [
        'title' => 'Mobile portrait',
        'allowedAspectRatios' => [
            '3:4' => [
                'title' => '3:4',
                'value' => 3 / 4
            ],
        ],
        'selectedRatio' => '3:4',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
        'focusArea' => [
            'x' => 1 / 3,
            'y' => 1 / 3,
            'width' => 1 / 3,
            'height' => 1 / 3,
        ],
        'coverAreas' => [
            [
                'x' => 0.05,
                'y' => 0.8,
                'width' => 0.9,
                'height' => 0.15,
            ]
        ],
    ],
];

if (!isset($GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'])) {
    $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = [];
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'] = array_merge(
    $GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['cropVariants'],
    $additionalCropVariants
);