<?php
declare(strict_types=1);

// RonSwansonQuotes SDK utility: result_headers

class RonSwansonQuotesResultHeaders
{
    public static function call(RonSwansonQuotesContext $ctx): ?RonSwansonQuotesResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
