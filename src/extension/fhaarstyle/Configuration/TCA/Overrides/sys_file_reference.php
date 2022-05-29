<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function ($extKey, $table) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, [
            'shadow' => [
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                ],
                'exclude' => '1',
                'label' => 'Schatten'
            ],
        ]);
        $GLOBALS['TCA']['sys_file_reference']['palettes']['imageoverlayPalette']['showitem'] = '
            title,alternative,
            --linebreak--,
            shadow,
            --linebreak--,
            description,
            --linebreak--,
            crop
            ';
    },
    'fhaarstyle',
    'sys_file_reference'
);
