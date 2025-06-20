<?php

namespace Leuchtfeuer\MauticFormular\Eval;

use Leuchtfeuer\MauticFormular\Service\SanitizingHostnameService;

class SanitizeHostname
{
    public function evaluateFieldValue($value, $is_in, &$set)
    {
        $service = new SanitizingHostnameService();
        return $service->normalizeUrlScheme($value);
    }

}
