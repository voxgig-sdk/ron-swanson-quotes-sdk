<?php
declare(strict_types=1);

// RonSwansonQuotes SDK utility: result_body

class RonSwansonQuotesResultBody
{
    public static function call(RonSwansonQuotesContext $ctx): ?RonSwansonQuotesResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
