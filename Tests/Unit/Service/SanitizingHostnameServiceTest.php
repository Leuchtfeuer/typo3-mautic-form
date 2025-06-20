<?php

/*
 * This file is part of the "Leuchtfeuer Website".
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) Leuchtfeuer Digital Marketing <dev@Leuchtfeuer.com>
 */

namespace Leuchtfeuer\MauticFormular\Service;

use PHPUnit\Framework\TestCase;

class SanitizingHostnameServiceTest extends TestCase
{
    public function testGetUrlWithSlug()
    {
        $service = new SanitizingHostnameService();
        $url = "https://xy.com/mautic/";
        $this->assertEquals('xy.com/mautic', $service->normalizeUrlScheme($url));
    }

    public function testGetUrlWithoutHttps()
    {
        $service = new SanitizingHostnameService();
        $url = "https://xy.com/";
        $this->assertEquals('xy.com', $service->normalizeUrlScheme($url));
    }
    public function testGetUrlWithoutHttp()
    {
        $service = new SanitizingHostnameService();
        $url = "http://xy.com/";
        $this->assertEquals('xy.com', $service->normalizeUrlScheme($url));
    }
}