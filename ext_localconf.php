<?php

declare(strict_types=1);

use Leuchtfeuer\Typo3MauticFormular\Eval\SanitizeHostname;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
if ($versionInformation->getMajorVersion() < 12) {
    ExtensionManagementUtility::addPageTSConfig(
        '@import "EXT:typo3_mautic_form/Configuration/page.tsconfig"',
    );
}

call_user_func(function()
{
    $extensionKey = 'typo3_mautic_form';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $extensionKey,
        'setup',
        "@import 'EXT:typo3_mautic_form/Configuration/TypoScript/setup.typoscript'"
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $extensionKey,
        'constants',
        "@import 'EXT:typo3_mautic_form/Configuration/TypoScript/constants.typoscript'"
    );
});


$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][SanitizeHostname::class] = '';
