<?php
declare(strict_types=1);

// RonSwansonQuotes SDK utility: feature_add

class RonSwansonQuotesFeatureAdd
{
    public static function call(RonSwansonQuotesContext $ctx, mixed $f): void
    {
        $ctx->client->features[] = $f;
    }
}
