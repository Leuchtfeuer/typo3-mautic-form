<?php


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:typo3_mautic_formular/Resources/Private/Language/locallang.xlf:mautic_form.title',
        'value' => 'typo3_mautic_formular',
        'icon' => 'content-form',
        'group' => 'default',
        'description' => 'LLL:EXT:typo3_mautic_formular/Resources/Private/Language/locallang.xlf:mautic_form.description',
    ],
    'header',
    'before'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['typo3_mautic_formular'] = 'content-form';

$tempColumns = [
    'mautic_form_id' => [
        'label' => 'LLL:EXT:typo3_mautic_formular/Resources/Private/Language/locallang.xlf:mautic_form.id',
        'config' => [
            'type' => 'input',
            'eval' => 'required,int',
        ],
    ],
    'mautic_server_url' => [
        'label' => 'LLL:EXT:typo3_mautic_formular/Resources/Private/Language/locallang.xlf:mautic_form.server_url',
        'config' => [
            'type' => 'input',
            'eval' => 'required,trim',
            'placeholder' => 'z.B. mautic.domain.de/pfad',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);


$GLOBALS['TCA']['tt_content']['types']['typo3_mautic_formular'] = [
    'showitem' => '
        --palette--;;general,
        mautic_form_id,
        mautic_server_url,
        --div--;Zugriff,
        --palette--;;access,
    ',
];