<?php
/***************************************************************
  *  Copyright notice
  *
  *  (c) 2019 Felix Herrmann <info@failx.de>
  *
  *  All rights reserved
  *
  *  This script is part of the TYPO3 project. The TYPO3 project is
  *  free software; you can redistribute it and/or modify
  *
  *  it under the terms of the GNU General Public License as published by
  *  the Free Software Foundation; either version 3 of the License, or
  *  (at your option) any later version.
  *
  *  The GNU General Public License can be found at
  *  http://www.gnu.org/copyleft/gpl.html.
  *
  *  This script is distributed in the hope that it will be useful,
  *  but WITHOUT ANY WARRANTY; without even the implied warranty of
  *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *  GNU General Public License for more details.
  *
  *  This copyright notice MUST APPEAR in all copies of the script!
  ***************************************************************/

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function ($_EXTKEY) {
        // Create TCA columns.
        $columns = [
            'header' => [
                'config' => [
                    'type' => 'text',
                    'cols' => 40,
                    'rows' => 3,
                    'default' => ''
                ],
            ],
            'projects' => [
                'exclude' => true,
                'label' => 'Projekte',
                'config' => [
                    'type' => 'inline',
                    'allowed' => 'tx_fxtemplateshhhuerth_domain_model_project',
                    'foreign_table' => 'tx_fxtemplateshhhuerth_domain_model_project',
                    'foreign_sortby' => 'sorting',
                    'foreign_field' => 'tt_content_related_project',
                    'minitems' => 0,
                    'maxitems' => 99,
                    'appearance' => [
                        'collapseAll' => true,
                        'expandSingle' => true,
                        'levelLinksPosition' => 'bottom',
                        'useSortable' => true,
                        'showPossibleLocalizationRecords' => true,
                        'showRemovedLocalizationRecords' => true,
                        'showAllLocalizationLink' => true,
                        'showSynchronizationLink' => true,
                        'enabledControls' => [
                            'info' => false,
                        ]
                    ],
                    'behaviour' => [
                        'allowLanguageSynchronization' => true,
                    ],
                ]
            ],
        ];
        // Add TCA columns.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'tt_content',
            $columns
        );
        $GLOBALS['TCA']['tt_content']['types']['textimageright'] = [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;header,
                image,
                bodytext,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;frames,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                    ]
                ]
            ]
        ];
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:textimageright',
                 'textimageright',
                 'content-textpic',
             ],
            'textmedia',
            'after'
        );

        $GLOBALS['TCA']['tt_content']['types']['textimageleft'] = [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;header,
                image,
                bodytext,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;frames,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                    ]
                ]
            ]
        ];
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:textimageleft',
                 'textimageleft',
                 'content-textpic',
             ],
            'textmedia',
            'after'
        );

        $GLOBALS['TCA']['tt_content']['types']['project_gallery'] = [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header; Internal title (not displayed),
                    projects,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
               ',
         ];
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:project_gallery',
                 'project_gallery',
                 'content-image',
             ],
            'textmedia',
            'after'
        );
    },
    'fhaarstyle'
);
