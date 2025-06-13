<?php


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        //title
        'label' => 'LLL:EXT:typo3_mautic_formular/Resources/Private/Language/locallang.xlf:mautic_formular.title',

        // plugin signature: extkey_identifier
        'value' => 'typo3_mautic_formular',
        // icon identifier
        'icon' => 'content-form',
        // group
        'group' => 'default',
        // description
        'description' => 'LLL:EXT:typo3_mautic_formular/Resources/Private/Language/locallang.xlf:mautic_formular.description',
    ],
    'header',
    'before'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['typo3_mautic_formular'] = 'content-form';

$GLOBALS['TCA']['tt_content']['types']['typo3_mautic_formular'] = [
    'showitem' => '
        --palette--;;general,
        header,
        subheader,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;,
    ',
    'columnsOverrides' => [
        'header' => [
            'label' => 'Form ID',
            'config' => [
                'type' => 'input',
                'eval' => 'required,int',
            ],
        ],
        'subheader' => [
            'label' => 'Mautic Server',
            'config' => [
                'type' => 'input',
                'eval' => 'required,trim',
                'placeholder' => 'z.B. mautic.domain.de/pfad',
            ],
        ],
    ],
];