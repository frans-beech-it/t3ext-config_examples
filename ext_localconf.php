<?php
defined('TYPO3_MODE') || die(':-)');


call_user_func(function ($packageKey) {

    // Set our own default RTE config
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] =
        'EXT:config_examples/Configuration/RTE/Default.yaml';

    // Register or own text-element config
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['text-element'] =
        'EXT:config_examples/Configuration/RTE/TextElement.yaml';

    // Register or own plugin-example config
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['plugin-example'] =
        'EXT:config_examples/Configuration/RTE/PluginExample.yaml';

}, $_EXTKEY);