<?php

namespace Leuchtfeuer\MauticFormular\Service;

class SanitizingHostnameService
{
    public function normalizeUrlScheme(string $url): string
    {
        $urlReplaced = preg_replace('#^https?://#i', '', $url);

        return rtrim($urlReplaced, '/');
    }


}