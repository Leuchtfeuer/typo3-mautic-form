<?php


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:typo3_mautic_form.title',
        'value' => 'typo3_mautic_form',
        'icon' => 'content-form',
        'group' => 'default',
        'description' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:typo3_mautic_form.description',
    ],
    'header',
    'before'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['typo3_mautic_form'] = 'content-form';

$tempColumns = [
    'typo3_mautic_form_id' => [
        'label' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:typo3_mautic_form.id',
        'config' => [
            'type' => 'input',
            'eval' => 'required,int',
            'range' => [
                'lower' => 1,
                'upper' => 100000
            ],
            'size' => 10,
        ],
    ],
    'typo3_mautic_server_url' => [
        'label' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:typo3_mautic_form.server_url',
        'description' => 'LLL:EXT:typo3_mautic_form/Resources/Private/Language/locallang_db.xlf:typo3_mautic_form.server_url.description',
        'config' => [
            'type' => 'input',
            'eval' => 'required,trim,' . Leuchtfeuer\Typo3MauticFormular\Eval\SanitizeHostname::class,
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);


$GLOBALS['TCA']['tt_content']['types']['typo3_mautic_form'] = [
    'showitem' => '
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;general,--palette--;;headers,typo3_mautic_server_url,typo3_mautic_form_id,
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, --palette--;;language, 
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;hidden,--palette--;;access, 
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories, 
         --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription 
    ',
];