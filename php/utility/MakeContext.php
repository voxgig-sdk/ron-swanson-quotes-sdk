<?php
declare(strict_types=1);

// RonSwansonQuotes SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class RonSwansonQuotesMakeContext
{
    public static function call(array $ctxmap, ?RonSwansonQuotesContext $basectx): RonSwansonQuotesContext
    {
        return new RonSwansonQuotesContext($ctxmap, $basectx);
    }
}
