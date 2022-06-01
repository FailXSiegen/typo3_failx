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
            'parallax' => [
                'label' => 'Bild mit Parallax',
                'exclude' => 0,
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'items' => [
                        [
                            0 => '',
                            1 => '',
                        ]
                    ],
                ],
            ],
            'parallaxoption' => [
                'label' => 'Parallax-Optionen',
                'description' => 'Positive Zahl für Bewegung von unten nach oben; Negative Zahl für Bewegung von oben nach unten; Default: -0.15',
                'exclude' => 0,
                'config' => [
                    'type' => 'input',
                    'eval' => 'trim',
                    'default' => '-0.15',
                ],
            ],
            'animatecss' => [
                'label' => 'Zusätzliche Animationsklassen',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['Keine', ''],
                        ['FadeIn', 'fadeIn'],
                        ['FadeInDown', 'fadeInDown'],
                        ['FadeInLeft', 'fadeInLeft'],
                        ['FadeInRight', 'fadeInRight'],
                        ['FadeInUp', 'fadeInUp'],
                        ['SlideIn', 'slideIn'],
                        ['SlideInDown', 'slideInDown'],
                        ['SlideInLeft', 'slideInLeft'],
                        ['SlideInRight', 'slideInRight'],
                        ['SlideInUp', 'slideInUp'],
                    ],
                ],
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

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
            '1col',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:1col.title',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:1col.description',
            'EXT:fhaarstyle/Resources/Public/Icons/col1.gif',
            [
                [
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 101]
                ]
            ]
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
            '2cols',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:2cols.title',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:2cols.description',
            'EXT:fhaarstyle/Resources/Public/Icons/col2.gif',
            [
                [
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 201],
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col2', 'colPos' => 202]
                ]
            ]
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
            '3cols',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:3cols.title',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:3cols.description',
            'EXT:fhaarstyle/Resources/Public/Icons/col3.gif',
            [
                [
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 301],
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col2', 'colPos' => 302],
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col3', 'colPos' => 303]
                ]
            ]
        );

        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
            '4cols',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:4cols.title',
            'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:4cols.description',
            'EXT:fhaarstyle/Resources/Public/Icons/col4.gif',
            [
                [
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col1', 'colPos' => 401],
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col2', 'colPos' => 402],
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col3', 'colPos' => 403],
                    ['name' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col4', 'colPos' => 404]
                ]
            ]
        );
        
        $GLOBALS['TCA']['tt_content']['types']['1col']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        header,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['2cols']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;col1,--palette--;;col2,
        --div--;LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row,row_space_class,row_item_class,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['3cols']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;col1,--palette--;;col2,--palette--;;col3,
        --div--;LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row,row_space_class,row_item_class,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['types']['4cols']['showitem'] = '
        CType,header,tx_container_parent,colPos,--palette--;;col1,--palette--;;col2,--palette--;;col3,--palette--;;col4,
        --div--;LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row,row_space_class,row_item_class,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,';

        $GLOBALS['TCA']['tt_content']['palettes']['col1'] = [
            'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col1',
            'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_1_class,col_1_sm_class,col_1_md_class,col_1_lg_class,col_1_xl_class,col_1_xxl_class,--linebreak--,col_1_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['col2'] = [
            'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col2',
            'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_2_class,col_2_sm_class,col_2_md_class,col_2_lg_class,col_2_xl_class,col_2_xxl_class,--linebreak--,col_2_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['col3'] = [
            'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col3',
            'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_3_class,col_3_sm_class,col_3_md_class,col_3_lg_class,col_3_xl_class,col_3_xxl_class,--linebreak--,col_3_custom_class'
        ];
        $GLOBALS['TCA']['tt_content']['palettes']['col4'] = [
            'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.col4',
            'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.sheet.description',
            'showitem' => 'col_4_class,col_4_sm_class,col_4_md_class,col_4_lg_class,col_4_xl_class,col_4_xxl_class,--linebreak--,col_4_custom_class'
        ];

                
        $container_columns = [
            'space_start_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:space.start',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['Default',''],
                        ['0','ps-0'],
                        ['1','ps-1'],
                        ['2','ps-2'],
                        ['3','ps-3'],
                        ['4','ps-4'],
                        ['5','ps-5'],
                        ['6','ps-2 ps-md-4 ps-xl-6'],
                        ['7','ps-2 ps-md-4 ps-xl-7'],
                        ['8','ps-2 ps-md-5 ps-xl-8'],
                        ['9','ps-2 ps-md-5 ps-xl-9'],
                        ['10','ps-2 ps-md-5 ps-xl-10'],
                        ['Auto','ms-auto'],
                    ],
                ],
            ],
            'space_end_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:space.end',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['Default',''],
                        ['0','pe-0'],
                        ['1','pe-1'],
                        ['2','pe-2'],
                        ['3','pe-3'],
                        ['4','pe-4'],
                        ['5','pe-5'],
                        ['6','pe-2 pe-md-4 pe-xl-6'],
                        ['7','pe-2 pe-md-4 pe-xl-7'],
                        ['8','pe-2 pe-md-5 pe-xl-8'],
                        ['9','pe-2 pe-md-5 pe-xl-9'],
                        ['10','pe-2 pe-md-5 pe-xl-10'],
                        ['Auto','me-auto'],
                    ],
                ],
            ],
            'row_space_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row.space',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row.space.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                        ['Start','justify-content-start','EXT:fhaarstyle/Resources/Public/Icons/justify-content-start.png'],
                        ['Ende','justify-content-end','EXT:fhaarstyle/Resources/Public/Icons/justify-content-end.png'],
                        ['Mitte','justify-content-center','EXT:fhaarstyle/Resources/Public/Icons/justify-content-center.png'],
                        ['Außen','justify-content-between','EXT:fhaarstyle/Resources/Public/Icons/justify-content-between.png'],
                        ['Flexibel','justify-content-around','EXT:fhaarstyle/Resources/Public/Icons/justify-content-around.png'],
                        ['Gleichmäßig','justify-content-evenly','EXT:fhaarstyle/Resources/Public/Icons/justify-content-evenly.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'row_item_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row.item',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:row.item.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'items' => [
                        ['---',''],
                        ['Start','align-items-start','EXT:fhaarstyle/Resources/Public/Icons/align-items-start.png'],
                        ['Ende','align-items-end','EXT:fhaarstyle/Resources/Public/Icons/align-items-end.png'],
                        ['Mitte','align-items-center','EXT:fhaarstyle/Resources/Public/Icons/align-items-center.png'],
                        ['Basislinie','align-items-baseline','EXT:fhaarstyle/Resources/Public/Icons/align-items-baseline.png'],
                        ['Vollfläche','align-items-stretch','EXT:fhaarstyle/Resources/Public/Icons/align-items-stretch.png']
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
            ],
            'col_1_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1Class',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_1_sm_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1SmClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_1_md_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1MdClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_1_lg_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1LgClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_1_xl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1XlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_1_xxl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1XxlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_1_custom_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col1CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],

            'col_2_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2Class',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_2_sm_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2SmClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_2_md_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2MdClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_2_lg_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2LgClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_2_xl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2XlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_2_xxl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2XxlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_2_custom_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col2CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],

            'col_3_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3Class',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_3_sm_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3SmClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_3_md_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3MdClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_3_lg_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3LgClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_3_xl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3XlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_3_xxl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3XxlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_3_custom_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col3CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],

            'col_4_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4Class',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xsCol'
                    ],
                    'default' => 'col'
                ],
            ],
            'col_4_sm_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4SmClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.sm.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'smCol'
                    ],
                ],
            ],
            'col_4_md_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4MdClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.md.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'mdCol'
                    ],
                ],
            ],
            'col_4_lg_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4LgClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.lg.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'lgCol'
                    ],
                ],
            ],
            'col_4_xl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4XlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xlCol'
                    ],
                ],
            ],
            'col_4_xxl_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4XxlClass',
                'description' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:class.xxl.description',
                'config' => [
                    'renderType' => 'selectSingle',
                    'type' => 'select',
                    'itemsProcFunc' => 'Failx\Fhaarstyle\Controller\TcaController->getColumnOptions',
                    'itemsProcConfig' => [
                        'col' => 'xxlCol'
                    ],
                ],
            ],
            'col_4_custom_class' => [
                'label' => 'LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_ttc.xlf:col4CustomClass',
                'config' => [
                    'type' => 'input',
                ],
            ],
        ];
        // Add TCA columns.
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'tt_content',
            $container_columns
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'imagelinks',
            '--linebreak--, row_space_class, row_item_class',
            'after:image_zoom'
        );
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
            'tt_content',
            'gallerySettings',
            '--linebreak--, imagecols_xxl, imagecols_xl, imagecols_lg, imagecols_md, imagecols_sm',
            'before:imagecols'
        );
    },
    'fhaarstyle'
);
