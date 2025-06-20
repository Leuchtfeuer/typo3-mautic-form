<?php

namespace Leuchtfeuer\Typo3MauticFormular\Eval;

use Leuchtfeuer\Typo3MauticFormular\Service\SanitizingHostnameService;

class SanitizeHostname
{
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        $service = new SanitizingHostnameService();
        return $service->normalizeUrlScheme($value);
    }

}
