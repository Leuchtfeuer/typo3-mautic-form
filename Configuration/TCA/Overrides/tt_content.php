<?php


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:mautic_form.title',
        'value' => 'typo3_mautic_form',
        'icon' => 'content-form',
        'group' => 'default',
        'description' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:mautic_form.description',
    ],
    'header',
    'before'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['typo3_mautic_form'] = 'content-form';

$tempColumns = [
    'mautic_form_id' => [
        'label' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:mautic_form.id',
        'config' => [
            'type' => 'input',
            'eval' => 'required,int',
            'size' => 10,
        ],
    ],
    'mautic_server_url' => [
        'label' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:mautic_form.server_url',
        'config' => [
            'type' => 'input',
            'eval' => 'required,trim',
            'size' => 45,
            'placeholder' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:mautic_form.placeholder',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);


$GLOBALS['TCA']['tt_content']['types']['typo3_mautic_form'] = [
    'showitem' => '
        --palette--;;general,
        mautic_server_url,
        mautic_form_id,
    ',
];