<?php
declare(strict_types=1);

// RonSwansonQuotes SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class RonSwansonQuotesFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new RonSwansonQuotesBaseFeature();
            case "test":
                return new RonSwansonQuotesTestFeature();
            default:
                return new RonSwansonQuotesBaseFeature();
        }
    }
}
