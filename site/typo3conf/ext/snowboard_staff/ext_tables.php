<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Snowboard.SnowboardStaff',
            'Pi',
            'Mitarbeiterliste'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('snowboard_staff', 'Configuration/TypoScript', 'Snowboardlehrer');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_snowboardstaff_domain_model_snowboardteacher', 'EXT:snowboard_staff/Resources/Private/Language/locallang_csh_tx_snowboardstaff_domain_model_snowboardteacher.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_snowboardstaff_domain_model_snowboardteacher');

    }
);
