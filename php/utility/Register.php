<?php
declare(strict_types=1);

// RonSwansonQuotes SDK utility registration

require_once __DIR__ . '/../core/UtilityType.php';
require_once __DIR__ . '/Clean.php';
require_once __DIR__ . '/Done.php';
require_once __DIR__ . '/MakeError.php';
require_once __DIR__ . '/FeatureAdd.php';
require_once __DIR__ . '/FeatureHook.php';
require_once __DIR__ . '/FeatureInit.php';
require_once __DIR__ . '/Fetcher.php';
require_once __DIR__ . '/MakeFetchDef.php';
require_once __DIR__ . '/MakeContext.php';
require_once __DIR__ . '/MakeOptions.php';
require_once __DIR__ . '/MakeRequest.php';
require_once __DIR__ . '/MakeResponse.php';
require_once __DIR__ . '/MakeResult.php';
require_once __DIR__ . '/MakePoint.php';
require_once __DIR__ . '/MakeSpec.php';
require_once __DIR__ . '/MakeUrl.php';
require_once __DIR__ . '/Param.php';
require_once __DIR__ . '/PrepareAuth.php';
require_once __DIR__ . '/PrepareBody.php';
require_once __DIR__ . '/PrepareHeaders.php';
require_once __DIR__ . '/PrepareMethod.php';
require_once __DIR__ . '/PrepareParams.php';
require_once __DIR__ . '/PreparePath.php';
require_once __DIR__ . '/PrepareQuery.php';
require_once __DIR__ . '/ResultBasic.php';
require_once __DIR__ . '/ResultBody.php';
require_once __DIR__ . '/ResultHeaders.php';
require_once __DIR__ . '/TransformRequest.php';
require_once __DIR__ . '/TransformResponse.php';

RonSwansonQuotesUtility::setRegistrar(function (RonSwansonQuotesUtility $u): void {
    $u->clean = [RonSwansonQuotesClean::class, 'call'];
    $u->done = [RonSwansonQuotesDone::class, 'call'];
    $u->make_error = [RonSwansonQuotesMakeError::class, 'call'];
    $u->feature_add = [RonSwansonQuotesFeatureAdd::class, 'call'];
    $u->feature_hook = [RonSwansonQuotesFeatureHook::class, 'call'];
    $u->feature_init = [RonSwansonQuotesFeatureInit::class, 'call'];
    $u->fetcher = [RonSwansonQuotesFetcher::class, 'call'];
    $u->make_fetch_def = [RonSwansonQuotesMakeFetchDef::class, 'call'];
    $u->make_context = [RonSwansonQuotesMakeContext::class, 'call'];
    $u->make_options = [RonSwansonQuotesMakeOptions::class, 'call'];
    $u->make_request = [RonSwansonQuotesMakeRequest::class, 'call'];
    $u->make_response = [RonSwansonQuotesMakeResponse::class, 'call'];
    $u->make_result = [RonSwansonQuotesMakeResult::class, 'call'];
    $u->make_point = [RonSwansonQuotesMakePoint::class, 'call'];
    $u->make_spec = [RonSwansonQuotesMakeSpec::class, 'call'];
    $u->make_url = [RonSwansonQuotesMakeUrl::class, 'call'];
    $u->param = [RonSwansonQuotesParam::class, 'call'];
    $u->prepare_auth = [RonSwansonQuotesPrepareAuth::class, 'call'];
    $u->prepare_body = [RonSwansonQuotesPrepareBody::class, 'call'];
    $u->prepare_headers = [RonSwansonQuotesPrepareHeaders::class, 'call'];
    $u->prepare_method = [RonSwansonQuotesPrepareMethod::class, 'call'];
    $u->prepare_params = [RonSwansonQuotesPrepareParams::class, 'call'];
    $u->prepare_path = [RonSwansonQuotesPreparePath::class, 'call'];
    $u->prepare_query = [RonSwansonQuotesPrepareQuery::class, 'call'];
    $u->result_basic = [RonSwansonQuotesResultBasic::class, 'call'];
    $u->result_body = [RonSwansonQuotesResultBody::class, 'call'];
    $u->result_headers = [RonSwansonQuotesResultHeaders::class, 'call'];
    $u->transform_request = [RonSwansonQuotesTransformRequest::class, 'call'];
    $u->transform_response = [RonSwansonQuotesTransformResponse::class, 'call'];
});
