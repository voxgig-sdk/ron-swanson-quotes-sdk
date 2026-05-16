<?php
declare(strict_types=1);

// RonSwansonQuotes SDK utility: prepare_body

class RonSwansonQuotesPrepareBody
{
    public static function call(RonSwansonQuotesContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
