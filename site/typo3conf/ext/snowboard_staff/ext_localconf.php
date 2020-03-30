<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Snowboard.SnowboardStaff',
            'Pi',
            [
                'SnowboardTeacher' => 'list, show'
            ],
            // non-cacheable actions
            [
                'SnowboardTeacher' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi {
                        iconIdentifier = snowboard_staff-plugin-pi
                        title = LLL:EXT:snowboard_staff/Resources/Private/Language/locallang_db.xlf:tx_snowboard_staff_pi.name
                        description = LLL:EXT:snowboard_staff/Resources/Private/Language/locallang_db.xlf:tx_snowboard_staff_pi.description
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
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'snowboard_staff-plugin-pi',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:snowboard_staff/Resources/Public/Icons/user_plugin_pi.svg']
			);
		
    }
);
