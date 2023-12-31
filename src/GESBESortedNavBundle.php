<?php

namespace GES\Contao\BESortedNavBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use function dirname;

class GESBESortedNavBundle extends Bundle
{
    public const NAME = 'be_sorted_nav';

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public static function getScript(): string
    {
        $filePath = '/bundles/gesbesortednav/js/ges-be-sorted-nav.js';
        # $hash = hash_file('sha384', __DIR__.'/../public/js/ges-be-sorted-nav.js', true);
        # $hash = hex2bin('1449cbfd7a7210d94753506a15051db0a5b4ec35147201f58fd9408a883913cd80b919057bd35b3c6fb13d34e11f66d1');
        # $encoded = base64_encode($hash);
        $encoded = 'FEnL/XpyENlHU1BqFQUdsKW07DUUcgH1j9lAiog5E82AuRkFe9NbPG+xPTThH2bR';
        return "<script type=\"text/javascript\" src=\"$filePath\" integrity=\"sha384-$encoded\"></script>";
    }
}