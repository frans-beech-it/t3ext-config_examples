<?php
defined('TYPO3_MODE') or die();

//Register pageTs Config files for including at page level
$pageTsFolder = 'Configuration/TsConfig/Page/';

$pageTsStorages = [
    'rte.t3s' => 'RTE',
];

foreach ($pageTsStorages as $configFile => $name) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'config_examples',
        $pageTsFolder . $configFile,
        $name
    );
}