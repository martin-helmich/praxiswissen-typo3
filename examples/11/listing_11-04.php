<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function() {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Snowboard.SnowboardStaff',
            'Pi',
            ['SnowboardTeacher' => 'list, show'],
            ['SnowboardTeacher' => '']
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi {
                            icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('snowboard_staff') . 'Resources/Public/Icons/user_plugin_pi.svg
                            title = LLL:EXT:snowboard_staff/Resources/Private/Language/locallang_db.xlf:tx_snowboard_staff_domain_model_pi
                            description = LLL:EXT:snowboard_staff/Resources/Private/Language/locallang_db.xlf:tx_snowboard_staff_domain_model_pi.description
                            tt_content_defValues {
                                CType = list
                                list_type = snowboardstaff_pi
                            }
                        }
                    }
                    show = *
                }
        }'
        );
    }
);
