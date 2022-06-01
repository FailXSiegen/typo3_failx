<?php
namespace Failx\Fhaarstyle\Controller;

/*
 *
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *
 */

class TcaController
{

    /**
     * @param array $config
     * @return array
     */
    public function getTwoColumnOptions($config)
    {
        return \Failx\Fhaarstyle\Controller\TcaController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getThreeColumnOptions($config)
    {
        return  \Failx\Fhaarstyle\Controller\TcaController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public function getFourColumnOptions($config)
    {
        return  \Failx\Fhaarstyle\Controller\TcaController::getColumnOptions($config);
    }

    /**
     * @param array $config
     * @return array
     */
    public static function getColumnOptions($config)
    {
        // mdCol, smCol, xsCol or lgCol
        $columnType = $config['config']['itemsProcConfig']['col'];

        $optionList = array();
        switch ($columnType) {
            // extra small
            case 'xsCol':
                $optionList = array(
                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.autoLayout', 'col'),
                    array('25%', 'col-3'),
                    array('33%', 'col-4'),
                    array('50%', 'col-6'),
                    array('66%', 'col-8'),
                    array('75%', 'col-9'),
                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                    array('8.3%', 'col-1'),
                    array('16.7%', 'col-2'),
                    array('41.7%', 'col-5'),
                    array('58.3%', 'col-7'),
                    array('83.3%', 'col-10'),
                    array('91.7%', 'col-11'),
                    array('100%', 'col-12'),
                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.variableWidth', 'col-auto'));
                break;

            // small device with
            case 'smCol':
                $optionList = array(array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                                    array('25%', 'col-sm-3'),
                                    array('33%', 'col-sm-4'),
                                    array('50%', 'col-sm-6'),
                                    array('66%', 'col-sm-8'),
                                    array('75%', 'col-sm-9'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                                    array('8.3%', 'col-sm-1'),
                                    array('16.7%', 'col-sm-2'),
                                    array('41.7%', 'col-sm-5'),
                                    array('58.3%', 'col-sm-7'),
                                    array('83.3%', 'col-sm-10'),
                                    array('91.7%', 'col-sm-11'),
                                    array('100%', 'col-sm-12'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.variableWidth', 'col-sm-auto'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-sm-none'));
                break;

            // medium device with
            case 'mdCol':
                $optionList = array(array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                                    array('25%', 'col-md-3'),
                                    array('33%', 'col-md-4'),
                                    array('50%', 'col-md-6'),
                                    array('66%', 'col-md-8'),
                                    array('75%', 'col-md-9'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                                    array('8.3%', 'col-md-1'),
                                    array('16.7%', 'col-md-2'),
                                    array('41.7%', 'col-md-5'),
                                    array('58.3%', 'col-md-7'),
                                    array('83.3%', 'col-md-10'),
                                    array('91.7%', 'col-md-11'),
                                    array('100%', 'col-md-12'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.variableWidth', 'col-md-auto'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-md-none'));
                break;


            // extra large
            case 'lgCol':
                $optionList = array(array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                                    array('25%', 'col-lg-3'),
                                    array('33%', 'col-lg-4'),
                                    array('50%', 'col-lg-6'),
                                    array('66%', 'col-lg-8'),
                                    array('75%', 'col-lg-9'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                                    array('8.3%', 'col-lg-1'),
                                    array('16.7%', 'col-lg-2'),
                                    array('41.7%', 'col-lg-5'),
                                    array('58.3%', 'col-lg-7'),
                                    array('83.3%', 'col-lg-10'),
                                    array('91.7%', 'col-lg-11'),
                                    array('100%', 'col-lg-12'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.variableWidth', 'col-lg-auto'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-lg-none'));
                break;

            // extra large
            case 'xlCol':
                $optionList = array(array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                                    array('25% (col-xl-3)', 'col-xl-3'),
                                    array('33% (col-xl-4)', 'col-xl-4'),
                                    array('50% (col-xl-6)', 'col-xl-6'),
                                    array('66% (col-xl-8)', 'col-xl-8'),
                                    array('75% (col-xl-9)', 'col-xl-9'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                                    array('8.3% (col-xl-1)', 'col-xl-1'),
                                    array('16.7%  (col-xl-2)', 'col-xl-2'),
                                    array('41.7% (col-xl-5)', 'col-xl-5'),
                                    array('58.3% (col-xl-7)', 'col-xl-7'),
                                    array('83.3% (col-xl-10)', 'col-xl-10'),
                                    array('91.7% (col-xl-11)', 'col-xl-11'),
                                    array('100% (col-xl-12)', 'col-xl-12'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.variableWidth', 'col-xl-auto'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-xl-none'));
                break;
                 // extra extra large
            case 'xxlCol':
                $optionList = array(array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.notset', ' '),
                                    array('25% (col-xxl-3)', 'col-xxl-3'),
                                    array('33% (col-xxl-4)', 'col-xxl-4'),
                                    array('50% (col-xxl-6)', 'col-xxl-6'),
                                    array('66% (col-xxl-8)', 'col-xxl-8'),
                                    array('75% (col-xxl-9)', 'col-xxl-9'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreWidth', '--div--'),
                                    array('8.3% (col-xxl-1)', 'col-xxl-1'),
                                    array('16.7%  (col-xxl-2)', 'col-xxl-2'),
                                    array('41.7% (col-xxl-5)', 'col-xxl-5'),
                                    array('58.3% (col-xxl-7)', 'col-xxl-7'),
                                    array('83.3% (col-xxl-10)', 'col-xxl-10'),
                                    array('91.7% (col-xxl-11)', 'col-xxl-11'),
                                    array('100% (col-xxl-12)', 'col-xxl-12'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.moreOptions', '--div--'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.variableWidth', 'col-xxl-auto'),
                                    array('LLL:EXT:fhaarstyle/Resources/Private/Language/locallang_db.xlf:grid.label.hidden', 'd-xxl-none'));
                break;
        }
        $config['items'] = array_merge($config['items'], $optionList);
        return $config;
    }
}
