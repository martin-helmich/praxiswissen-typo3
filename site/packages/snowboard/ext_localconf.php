<?php

defined('TYPO3') or die('Access denied.');

// Add default RTE configuration
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['snowboard'] = 'EXT:snowboard/Configuration/RTE/Default.yaml';

/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
    module.tx_form {
       settings {
           yamlConfigurations {
               1732785702 = EXT:snowboard/Configuration/Yaml/Forms.yaml
           }
       }
    }
');
*/